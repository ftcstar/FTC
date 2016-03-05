<%@page import="java.util.*"%>
<%@page import="javax.servlet.*"%>
<%@page import="javax.servlet.http.*"%>
<%@page import="session.*"%>
<%@page import="dataProvider.*"%>
<%@page import="java.util.ArrayList"%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>FTC Star - Connecting fans with celebrities</title>

<script type='text/javascript' src='unitegallery/js/jquery-11.0.min.js'></script>
<script type='text/javascript' src='unitegallery/js/unitegallery.min.js'></script>

<link rel='stylesheet' href='unitegallery/css/unite-gallery.css' type='text/css' />

<script type='text/javascript'
	src='unitegallery/themes/compact/ug-theme-compact.js'></script>

</head>

<body>

	<div id="gallery" style="display: none;">
		<% System.out.println("<h2>Item Not Found</h2>"); 
		DataProvider dataProvider = new DataProvider();
		    ArrayList<WebDataProvider> dataList = dataProvider.getObjects();
		    for (WebDataProvider list : crunchifyList) {
				System.out.println(temp);
            	if (list != null) {
            		if(list.alt != null && !list.alt.isEmpty())
                		out.println("<img alt=\""+list.alt+"\"");
            		if(list.src != null && !list.src.isEmpty())
            			out.println("src=\""+list.src+"\"");
            		if(list.dataType != null && !list.dataType.isEmpty())
            			out.println("data-type=\""+list.dataType+"\"");
            		if(list.dataImage != null && !list.dataImage.isEmpty())
            			out.println("data-image=\""+list.dataImage+"\"");
            		if(list.dataVideoID != null && !list.dataVideoID.isEmpty())
            			out.println("data-videoid=\""+list.dataVideoID+"\"");
            		if(list.dataVideoogv != null && !list.dataVideoogv.isEmpty())
            			out.println("data-videoogv=\""+list.dataVideoogv+"\"");
            		if(list.dataVideowebm != null && !list.dataVideowebm.isEmpty())
            			out.println("data-videowebm=\""+list.dataVideowebm+"\"");
            		if(list.dataVideomp4 != null && !list.dataVideomp4.isEmpty())
            			out.println("data-videomp4=\""+list.dataVideomp4+"\"");
            		if(list.dataTrackID != null && !list.dataTrackID.isEmpty())
            			out.println("data-trackid=\""+list.dataTrackID+"\"");
          		  	if(list.dataDescription != null && !list.dataDescription.isEmpty())
          		  		out.println("data-description=\""+list.dataDescription+"\">");
          	  } else {
          			System.out.println("<h2>Item Not Found</h2>");
            	}
		    } %>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {

			jQuery("#gallery").unitegallery({
				theme_panel_position : "right"
			});

		});
	</script>
</body>
</html>