<%@ Language="VBScript" %>
<% Option Explicit %>

<%
    'The header/footer for the email.
    'Const strHeader = "Test Email"
    'Const strFooter = "Another Test Email"

    'Who does this go to?  MAKE SURE TO CHANGE THIS TO YOUR EMAIL ADDRESS!
    Const strTo = "will.a.salazar@gmail.com"

    'This information is optional
    Dim strFrom, strSubject, strBody, objCDO

    strFrom = strTo

    strSubject = "Test Subject"
    strBody = "This is the body"
    'Time to send the email
    Set objCDO = Server.CreateObject("CDONTS.NewMail")
    objCDO.To = strTo
    'objCDO.CC = strCC
    objCDO.From = strFrom

    objCDO.Subject = strSubject
    objCDO.Body = strBody

    objCDO.Send

%>
