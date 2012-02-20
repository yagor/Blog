<%--
  Created by IntelliJ IDEA.
  User: Egorevo
  Date: 06.02.12
  Time: 20:08
  To change this template use File | Settings | File Templates.
--%>
<%@taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<%@taglib uri="http://www.springframework.org/tags/form" prefix="form"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Spring 3 MVC Series - Contact Manager</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }
        .data, .data td {
            border-collapse: collapse;
            width: 770px;
            border: 1px solid #aaa;
            margin: 2px;
            padding: 2px;
        }
        .data th {
            font-weight: bold;
            background-color: #5C82FF;
            color: white;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<c:url value="/resources/css/main.css"/>" media="all">
</head>
<body>
<div id="header">
<h1 id="logo">My  ololo registration</h1>

     <span id="topmenu">
     <a href="<c:url value="posts"/> "> Blog</a><a>     |     </a>
     <a href="<c:url value="index"/> ">index</a>
    </span>


</div>
<div id="container">
   <br/>
<form:form method="post" action="add.html" commandName="contact">

   <table>
            <tr>
                <td>Name</td>
                <td><form:input path="firstname" /></td>
            </tr>
            <tr>
                <td>LastName</td>
                <td><form:input path="lastname" /></td>
            </tr>
            <tr>
                <td>e-mail</td>
                <td><form:input path="email" /></td>
            </tr>
            <tr>
                <td>Tel</td>
                <td><form:input path="telephone" /></td>
            </tr>
            <tr>
                <td>pasword</td>
                <td><form:input path="pasword" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="add user"/>
            </td>
        </tr>
    </table>
</form:form>


<h3>Эту табличку мб не стоит показвать вот так )))</h3>
<c:if  test="${!empty contactList}">
    <table class="data">
        <tr>
            <th>Name</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>pasword</th>
            <th>&nbsp;</th>
        </tr>
        <c:forEach items="${contactList}" var="contact">
            <tr>
                <td>${contact.lastname}</td>
                <td>${contact.firstname} </td>
                <td>${contact.email}</td>
                <td>${contact.telephone}</td>
                <td>${contact.pasword}</td>
                <td><a href="delete/${contact.id}">delete</a></td>
            </tr>
        </c:forEach>
    </table>
</c:if>
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


