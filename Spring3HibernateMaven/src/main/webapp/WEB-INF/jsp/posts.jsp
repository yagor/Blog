<%--
  Created by IntelliJ IDEA.
  User: Egorevo
  Date: 13.02.12
  Time: 17:14
  To change this template use File | Settings | File Templates.
--%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form" %>
<html>
<head>
    <title>LoloBlog</title>

    <link rel="stylesheet" type="text/css" href="<c:url value="/resources/css/main.css"/>" media="all">

</head>
<body>
<div id="header">
    <h1 id="logo"> My demo blog xD</h1>
    <span id="topmenu">
     <a href="<c:url value="myPage"/> "> registration</a><a>     |     </a>
     <a href="<c:url value="index"/> ">index</a>
    </span>



</div>

<div id="container">

    <div id="content">




<c:if  test="${!empty postList}">


        <c:forEach items="${postList}" var="post">

    <!-- Article -->
    <div class="article">
        <h2><span><a href="#">${post.title}</a></span></h2>
        <p class="info noprint"> <span class="date">${post.created}</span><span class="noscreen"></span> <span class="noscreen">,</span> <span class="user">My name</span><span class="noscreen">,</span> <span class="comments"><a href="#">Comments</a></span> </p>
        <p>${post.text_m}</p>
        <p class="btn-more box noprint"><strong><a href="posts/delete/${post.id_post}">delete</a></strong></p>
    </div>

        </c:forEach>

</c:if>

<form:form method="post" action="addpost" commandName="post">
    <table>
        <tr>
            <td>Enter th title</td>
            <td><form:input path="title"/> </td>
        </tr>
        <tr>

            <td>Enter the message</td>
             <td><form:textarea path="text_m" cols="60" rows="5" wrap="hard"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="add_post"/>
            </td>
        </tr>
    </table>
</form:form>
</div>
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