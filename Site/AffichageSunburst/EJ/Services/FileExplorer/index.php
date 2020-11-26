<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");

require_once("FileExplorerOperations.php");

if($_REQUEST["json"]!= null || $_REQUEST["Path"]){
	try{
		if($_REQUEST["json"]!= null)
			$args = json_decode($_REQUEST["json"], true);
			else
				$args = $_REQUEST;
		
				$result= "";
				$feObj = new FileExplorerOperations();
                if ($args["ActionType"] == "Upload") {
                    http_response_code(401);
                    echo json_encode(array('error' => 'Restricted to upload in our demo sample'));
                }
				if ($args["ActionType"] != "Paste" && $args["ActionType"] != "GetDetails")
				{
					$filePath = $feObj->GetPhysicalPath($feObj->ToAbsolute($args["Path"]));
					if (strpos(strtolower($filePath), 'filebrowser') === false )
						throw new Exception("'" + FilePath + "' is not accessible. Access is denied.");
				}
		
				switch($args["ActionType"]){
					case "Read":
						$result = $feObj ->Read($args["Path"], $args["ExtensionsAllow"]);
						break;
					/* case "CreateFolder":
						$result = $feObj ->CreateFolder($args["Path"], $args["Name"]);
						break;
					case "Remove":
						$result = $feObj ->Remove($args["Names"], $args["Path"]);
						break;
					case "Rename":
						$result = $feObj ->Rename($args["Path"], $args["Name"], $args["NewName"], $args["CommonFiles"] );
						break; */
					case "GetDetails":
						$result = $feObj ->GetDetails($args["Path"], $args["Names"] );
						break;
					/* case "Upload":
						$result = $feObj ->Upload($_FILES["FileUpload"], $args["Path"] );
						break;
					case "Paste":
						$result = $feObj ->Paste($args["LocationFrom"], $args["LocationTo"], $args["Names"], $args["Action"], $args["CommonFiles"]);
						break; */
					case "Search":
						$result = $feObj ->Search($args["Path"], $args["ExtensionsAllow"], $args["SearchString"], $args["CaseSensitive"]);
						break;
					case "Download":
						$fileNames = array();
						$selectedItems = json_decode($_REQUEST['SelectedItems'], true);
						for($i=0 ; $i< count($selectedItems); $i++){
							array_push($fileNames, $selectedItems[$i]["name"]);
						}
						$result = $feObj ->Download($args["Path"], $fileNames);
						break;
					case "GetImage":
						$result = $feObj ->GetImage($args["Path"], $args["CanCompress"], json_decode($args["Size"]));
						break;
				    //provide restriction to modify data in our online samples
					default:
						throw new Exception('Restricted to modify data in online demo.');
						
						
				}
				if($_GET['callback']){
					$result = json_encode($result);
					$functionName = $_GET['callback'];
					echo "$functionName($result);";
				}
				else{
					echo json_encode($result);
				}
	}    
	catch(Exception $e) {
		$response->error = $e->getMessage();
		if($_GET['callback']){
			$response = json_encode($response);
			$functionName = $_GET['callback'];
			echo "$functionName($response);";
		}
		else{
			echo json_encode($response);
		}
	}
    
}


?>