<%@ Language=VBScript %>

<%
Option Explicit
%>

<%
' ban ip addresses
' if Request.ServerVariables("REMOTE_ADDR") = "216.12.139.80" then
' response.redirect("banned.asp")
' end if
%>

<HTML>
<HEAD>
<title>DOCUMENTATION REPRINT ORDER FORM</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>


<BODY bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="100%" border="0">
  <tr> 
    <td><font face="Arial" size="2"><img src="../http://www.isda.org/publications/images/spacer.gif" width=1 height=20 alt="" border="0" vspace=0 hspace=0><IMG SRC="http://www.isda.org/publications/images/Publications.gif" BORDER=0><br>
      <IMG SRC="http://www.isda.org/publications/images/ruler.gif" WIDTH=230 HEIGHT=3 BORDER=0></font></td>
  </tr>
</table>
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCFFFF">
  <tr> 
    <td height="2" bgcolor="#003366"> <div align="center"><font face="Arial" size="3"><b><font color="#FFFFFF">DOCUMENTATION 
        REPRINT ORDER FORM</font></b></font></div></td>
  </tr>
</table>
<FORM ACTION="process.asp" METHOD="POST" name="shoutbox_post_form">
  <div align="left"> 
    <p> <font size="2" face="Arial">Please fill in the required field (<font color="#FF0000" size="3">*</font>)<br>
      <br>
      <strong><font size="2" face="Arial"><u>Billing Information</u>:</font></strong> 
      </font></p>
    </div>
  <table border="1"  cellpadding="5" width=100% bordercolor="#000033">
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td width="16%" align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>First 
        Name: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="FirstName" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Last 
        Name: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="LastName" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Company: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Arial" size="2"> 
          <input name="Company" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Address: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Arial" size="2"> 
          <input name="Address" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>City: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td width="32%" align=RIGHT> 
        <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="City" size=40>
          </font></div></td>
      <td align=RIGHT width=20%> 
        <div align="left"><font size="2" face="Arial"><b>State:</b></font> 
          <font face="Times New Roman, Times, serif" size="2"> 
          <input name="State" size=10>
          </font>&nbsp;</div></td>
      <td align=RIGHT width=32%> 
        <div align="left"><font size="2" face="Arial"><b>Zip/Postal 
          Code:</b></font> <font face="Times New Roman, Times, serif" size="2"> 
          <input name="Zip" size=10>
          </font><font face="Times New Roman, Times, serif" size="2">&nbsp; </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Country: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td colspan="3" align=RIGHT> 
        <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="Country" size=40>
          </font></div></td>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>E-mail: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Arial" size="2"> 
          <input name="email" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Telephone: 
        </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Arial" size="2"> 
          <input name="Phone" size=40>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Fax: 
        </b></font><font size="2" face="Arial">&nbsp;</font></td>
      <td align=RIGHT colspan=3> 
        <div align="left"><font face="Arial" size="2"> 
          <input name="Fax" size=40>
          </font></div></td>
    </tr>
  </table>
  <P><font size="2" face="Arial"><strong><u>Conference Information and ISDA Document</u>:<br>
    </strong></font></P>
  <table border="1"  cellpadding="5" width=100% bordercolor="#000033">
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td width="30%" align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Conference 
        / <br>
        Seminar Name: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></td>
      <td width="70%" align=RIGHT> <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="confsemname" size=60>
          <br>
          <em><font face="Arial">(Name of the Conference / Seminar at which the 
          ISDA document will be copied and distributed.)</font></em> <br>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Date 
        of Conference / <br>
        Seminar: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></td>
      <td align=RIGHT> <div align="left"><font face="Times New Roman, Times, serif" size="2"> 
          <input name="dateconfsem" size=60>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Location 
        of Conference / <br>
        Seminar: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT> <div align="left"><font face="Arial" size="2"> 
          <input name="locatconfsem" size=60>
          </font></div></td>
    </tr>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Document 
        Name: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font><font color="#FFFFFF" size="2" face="Arial"><b> 
        </b></font></td>
      <td align=RIGHT> <div align="left"><font face="Arial" size="2"> 
          <input name="documentname" size=60>
          <br>
          <em> (ISDA document that will be reprinted.)</em></font></div></td>
    </tr>
  </table>
  <P></P>
  <div align="left"> 
    <p><strong><font size="2" face="Arial"><u>Payment</u>:</font></strong><br>
      <font face="Times New Roman, Times, serif"> 
      <input name="payment" type="checkbox" id="payment"  value="Yes-Paid-$1000.00" checked>
      <font size="2" face="Arial"> Yes, I will pay the </font></font><font size="2" face="Arial"><strong><em>$1000.00 
      USD for each seminar, conference or training course for which the ISDA document 
      will be reprinted. </em></strong></font></p>
    <p><strong><font size="2" face="Arial"><u>Credit Card Information</u>:</font></strong><br>
    </p>
  </div>
  <table width="100%" border="1" bordercolor="#000033">
    <TR valign="top"> 
      <TD width="37%" ALIGN=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Name 
        of Credit Cardholder: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></TD>
      <TD width="63%" ALIGN=LEFT> <font face="Arial" size="2"> 
        <input name="creditcardholdername" size=50>
        </font></TD>
    </TR>
    <tr valign="top" bgcolor="#FFFFFF"> 
      <td height="2" align=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Credit 
        Card Type: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></td>
      <td height="2" align=LEFT><font face="Arial" size="2"> 
        <select name="creditcardtype">
		<option selected>---Select Card Type--</option>
          <option value="visa">Visa</option>
          <option value="master">Master Card</option>
          <option value="amex">Amex</option>
          <option value="diners">Diners Club</option>
        </select>
        </font></td>
    </tr>
    <TR valign="top"> 
      <TD ALIGN=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b>Account 
        Number: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></TD>
      <TD ALIGN=LEFT> <font face="Arial" size="2"> 
        <input name="creditcardnumber" size=50>
        </font> 
    <TR valign="top"> 
      <TD ALIGN=LEFT bgcolor="#003366"><font color="#FFFFFF" size="2" face="Arial"><b> 
        Expiration Date: </b></font><font size="2" face="Arial"><font color="#FF0000" size="3">*</font></font></TD>
      <TD ALIGN=LEFT> <font face="Arial" size="2"> 
        <input name="creditcardexpiredate" size=50>
        </font></TD>
    </TR>
  </table>
  <div align="center"><br>
    <br>
    <input type="submit" value="Submit" name="submit">
    <input type="reset" value="Reset" name="reset">
  </div>
</form>
</BODY>