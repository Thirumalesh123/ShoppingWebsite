<!doctype html>
<html lang="en">
<head>
  <title>${title}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

      
       <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
       
          <link href="${css}/dataTables.css" rel="stylesheet" />
          <link href="${css}/button.css" rel="stylesheet" />
                <script src="${js}/Jquery.min.js"></script>
 
    	<script src="${js}/bootstrap.min.js"></script>
    	<script src="${js}/dataTables.js"></script>
    	
      
           <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>
       <script>
        window.menu='${title}';
      	window.contextRoot='${contextRoot}';
      </script>
      <meta name="_csrf" content="${_csrf.token}">
	  <meta name="_csrf_header" content="${_csrf.headerName}">
</head>