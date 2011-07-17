<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<center>
    <div class="titulo_form">Inicio de sesión</div> <br>
    <table>
        <tr>
            <td>
               <?php if($sf_user->getFlash("error")): ?>
                <div class="error_flash"><?php echo $sf_user->getFlash("error"); ?></div>
                <?php endif; ?>
            </td>
        </tr>
        <tr>
            <td>
               <form action="<?php echo url_for("@user_login"); ?>" method="post" >
                   <table id="login_form">
                        <tfoot>
                          <tr>
                            <td colspan="2">
                              <input type="submit" value="Entrar" />
                            </td>
                          </tr>
                        </tfoot>
                        <tbody>
                        <?php echo $form; ?>
                        </tbody>
                   </table>
                   <br />
               </form>
            </td>
        </tr>
        <tr>
            <td>
            <?php if(!$form->hasErrors() && !$sf_user->getFlash("error")): ?>
                <div class="aviso_flash">Ingrese su usuario y contraseña para iniciar sesión en el sistema.
                </div>
            <?php endif; ?>
            </td>
        </tr>
    </table>
    	
</center>