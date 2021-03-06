<<<<<<< HEAD
<?php
/*
 * Copyright (C) 2005 Alfresco, Inc.
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

 * As a special exception to the terms and conditions of version 2.0 of 
 * the GPL, you may redistribute this Program in connection with Free/Libre 
 * and Open Source Software ("FLOSS") applications as described in Alfresco's 
 * FLOSS exception.  You should have recieved a copy of the text describing 
 * the FLOSS exception, and it is also available here: 
 * http://www.alfresco.com/legal/licensing"
 */
 
 require_once "LoggerConfig.php";
 
 class Logger
 { 	
 	private $componentName;
 	
 	public function __construct($componentName = null)
 	{
 		$this->componentName = $componentName;
 	}	
 	
 	public function isDebugEnabled()
 	{
 		return $this->isEnabled(DEBUG);
 	}
 	
 	public function debug($message)
 	{
 		$this->write(DEBUG, $message);	
 	}
 	
 	public function isWarningEnabled()
 	{
 		return $this->isEnabled(WARNING);
 	}
 	
 	public function warning($message)
 	{
 		$this->write(WARNING, $message);	
 	}
 	
 	public function isInformationEnabled()
 	{
 		return $this->isEnabled(INFORMATION); 		
 	}
 	
 	public function information($message)
 	{
 		$this->write(INFORMATION, $message);	
 	}
 	
 	private function isEnabled($logLevel)
 	{
 		global $componentLogLevels, $defaultLogLevel;
 		
 		$logLevels = $defaultLogLevel;
 		if ($this->componentName != null && isset($componentLogLevels[$this->componentName]) == true)
 		{
 			$logLevels = $componentLogLevels[$this->componentName];
 		}
 		
 		return in_array($logLevel, $logLevels);
 	}
 	
 	private function write($logLevel, $message)
 	{
 		global $logFile;
 		
		$handle = fopen($logFile, "a");
		fwrite($handle, $logLevel." ".date("G:i:s d/m/Y")." - ".$message."\r\n");
		fclose($handle);
 	}
 }
?>
=======
<?php
/*
 * Copyright (C) 2005-2010 Alfresco Software Limited.
 *
 * This file is part of Alfresco
 *
 * Alfresco is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Alfresco is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Alfresco. If not, see <http://www.gnu.org/licenses/>.
 */
 
 require_once $CFG->libdir."/alfresco/Service/Logger/LoggerConfig.php";
 
 class Logger
 { 	
 	private $componentName;
 	
 	public function __construct($componentName = null)
 	{
 		$this->componentName = $componentName;
 	}	
 	
 	public function isDebugEnabled()
 	{
 		return $this->isEnabled(DEBUG);
 	}
 	
 	public function debug($message)
 	{
 		$this->write(DEBUG, $message);	
 	}
 	
 	public function isWarningEnabled()
 	{
 		return $this->isEnabled(WARNING);
 	}
 	
 	public function warning($message)
 	{
 		$this->write(WARNING, $message);	
 	}
 	
 	public function isInformationEnabled()
 	{
 		return $this->isEnabled(INFORMATION); 		
 	}
 	
 	public function information($message)
 	{
 		$this->write(INFORMATION, $message);	
 	}
 	
 	private function isEnabled($logLevel)
 	{
 		global $componentLogLevels, $defaultLogLevel;
 		
 		$logLevels = $defaultLogLevel;
 		if ($this->componentName != null && isset($componentLogLevels[$this->componentName]) == true)
 		{
 			$logLevels = $componentLogLevels[$this->componentName];
 		}
 		
 		return in_array($logLevel, $logLevels);
 	}
 	
 	private function write($logLevel, $message)
 	{
 		global $logFile;
 		
		$handle = fopen($logFile, "a");
		fwrite($handle, $logLevel." ".date("G:i:s d/m/Y")." - ".$message."\r\n");
		fclose($handle);
 	}
 }
?>
>>>>>>> 230e37bfd87f00e0d010ed2ffd68ca84a53308d0
