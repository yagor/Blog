
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<html>
<head>
    <title>Egorevo demo blog</title>

    <link rel="stylesheet" type="text/css" href="<c:url value="/resources/css/main.css"/>" media="all">
</head>
<body>
<div id="header">
    <h1 id="logo">Demo first page</h1>
    <span id="topmenu">
     <a href="<c:url value="myPage"/> ">registration</a><a>     |     </a>
     <a href="<c:url value="posts"/> ">blog</a>
    </span>

</div>
<div id="container">
    <h1>Some content</h1>

    <div id="footer">
        FUCKING FOOTER !!!
         <span id="botmenu">
     <a href="<c:url value="myPage"/> "> registration</a>
       <a>     |     </a>
     <a href="<c:url value="index"/> ">index</a>
    </span>
    </div>

</div>
</body>
</html>