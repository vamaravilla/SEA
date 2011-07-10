<center>
    <h1> <center>Bienvenid@</center></h1> 
    <table>
        <tr>
            <td>
               <?php if($sf_user->getFlash("error")): ?>
                <div class="error"><?php echo $sf_user->getFlash("error"); ?></div>
                <?php endif; ?>
     
            </td>
        </tr>
        <tr>
            <td>
               <form action="<?php echo url_for("@user_login"); ?>" method="post">
                   <table>
                        <?php echo $form; ?>
                   </table>
                   <br />
               <input type="submit" value="Entrar" />
               </form>
            </td>
        </tr>
    </table>
    	
</center>