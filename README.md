Summary: in this tutorial,
 you will learn about cross-site request forgery (CSRF) attacks and how to 
 prevent them in PHP.


 WHAT IS CSRF(CROSS SITE REQUEST FORGERY )
It is a kind of attack in which the hacker forces you to execute an action against a 
website you are currently logged in.

For example, you visit the malicious-site.com that has a hidden form. And that form submits 
on page load to yourbank.com/transfer-fund form.

if the site you are logged for a transaction in implements the Cross Site Request Forgery
(CSRF) correctly, it will generte a one-time token and inserts the token
 into the transfer form as shown below.

 <input type="hidden" 
       name="token"
       value="n6f75c1ef885409c222fdb74125f5e7050ce4f3d15e8b15nme51678dd3a33d3a18kk3">


       when the hacker's-site.com submits the form, the mybank.com/tranfer-fund
       form compares the token with the one on the mybank.com's server.
       if the token does not exist in the submitted data/it doe not match with token on the
       server the fund tranfser form will reject the request sent and return an error.

    When the hacker's-site.com tries to submit the form, the token won't be available and won't match.