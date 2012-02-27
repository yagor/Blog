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
        <p class="info noprint"> <span class="date">${post.created}</span>

            <span class="noscreen"></span> <span class="noscreen">,</span>
            <span class="user">${post.contact.firstname} </span>
            <span class="noscreen">,</span>
            <span class="comments"><a href="#">Comments</a></span> </p>

        <p>${post.text_m}</p>

        <p class="btn-more box noprint"><strong><a href="posts/delete/${post.id_post}">delete</a></strong></p>
    </div>
    <c:if  test="${!empty listComments}">

        <c:forEach items="${post.comments}"   var="comment">
            <div class="comment">
             <c:out value="${comment.contact.firstname}"/>
            <br/>
            <c:out value="${comment.commentText}"/>
            <br/>
            <a href="posts/deletecomment/${comment.comment_id}">delete</a>
            </div>
        </c:forEach>



     </c:if>



        </c:forEach>

</c:if>

<form:form method="post" action="addpost" commandName="post">
    <table>
        <tr>
            <td>Enter id <form:input path="contact.id" /> ну шитука только чтоб потестить связи (ид будет назначен при авторизации)</td>
            <td></td>
        </tr>
        <tr>
            <td>Enter th title <form:input path="title"/></td>

        </tr>

        <tr>
            <td><form:textarea path="text_m" cols="60" rows="2" wrap="hard"/></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="add_post"/>
            </td>
        </tr>

    </table>
</form:form>

<h3> теперь для коментариев</h3>
        <form:form method="post" action="addcomment" commandName="comments" >


            <table>
                <tr>
                    <td>Enter the post id <form:input path="post_id"/></td>
                    <td>Enter user id <form:input path="contact.id"  />   </td>
                    <td><form:textarea path="commentText" cols="40" rows="2" wrap="hard" /></td>
                </tr>
                <tr>


                    <td colspan="2">
                        <input type="submit" value="add comment"/>

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