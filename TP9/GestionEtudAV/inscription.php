<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
   </head>
   <body>
      <h1>Inscription</h1>
      <form name="fo" method="post" action="inscription_tr.php">
         <table>
            <tr><td> CNE </td> <td><input type="text" name="cne" /></td></tr>
            <tr><td> NOM </td> <td><input type="text" name="nom" /></td></tr>
            <tr><td> PRENOM </td> <td> <input type="text" name="prenom" /></td></tr>
            <tr><td> LOGIN </td> <td> <input type="text" name="login" /></td></tr>
            <tr><td> MOT DE PASSE </td> <td> <input type="password" name="password" /></td></tr>
            <tr><td> RETAPER MOT DE PASSE </td> <td> <input type="password" name="pw2" /></td></tr>
            <tr>
               <td>  
                  <input type="submit" name="submit" value="S'inscrire" />
               </td> 
               <td> 
                  <input type="reset" name="Annuler" value="Annuler" />
               </td>
            </tr>
         </table>
      </form>
   </body>
</html>
