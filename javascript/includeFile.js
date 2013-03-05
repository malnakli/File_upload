						/** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
						 * Include other javascprite files										*
						 * Author: Mohammed Alnakli, Programmer.								*
						 * E-mail Address : mah.hassoun@gmail.com								*
						 * create date 	:	Aug 23,2011											*
						 * last changed : 	Aug 23,2011											*
						 ** * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
						 
						 
						 
			
			
		function includeFile(filePath){
			
			var script = document.createElement('script');
				script.type = "text/javascript";
				script.src = filePath;
		
			document.getElementsByTagName('head')[0].appendChild(script);
			
			
			
		}
		
		
		
		includeFile('../javascript/deleteFile.js');
		includeFile('../javascript/renameFile.js');
		