<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js"></script>
    <link rel="stylesheet" href="./css/css.css"/>

    <title>Contato</title>
</head>

    <header class="header">

     <nav>
        <label class="menu">Form Contact</label>
        <ul>
            <li><a href="./contact-banc/mostrar-dados.php">Exibir Dados</a></li>
        </ul>
    </nav>
    </header>
    
    <body>
   
        <main class="container">
            <h1>Contact</h1>

            <section>
                <form method="POST" action="./contact-banc/update-dados.php" onsubmit="return verErro()">

                <div class="inputs-field">
                    <input type="text" id="txtName" name="txtName" placeholder="Enter your Username" required="require" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$"value="<?php echo @$_GET['contact']?>"/>
                    <div class="underline"></div>
                </div>

                <div class="inputs-field">
                    <input type="email" id="txtEmail" name="txtEmail" placeholder="Enter your E-mail"
                     required="require"value="<?php echo @$_GET['econtact']?>"/>
                    <div class="underline"></div>
                </div>

                <div class="inputs-field">
                    <input type="text" id="txtSubject" name="txtSubject" placeholder="Enter your Subject" 
                    required="require"value="<?php echo @$_GET['scontact']?>"/>
                    <div class="underline"></div>
                </div>

                <div class="inputs-field">
                    <textarea type="text" id="txtMessage" name="txtMessage" placeholder="Enter your Messages"
                     required="require" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$" value="<?php echo @$_GET['mcontact']?>"></textarea>
                </div>

                <input type="submit" value="Save Data">
                
                 </form>

                <div class="social">
                    <span>Or Conect With Social</span>
                        <div class="social-field">
                            <div class="social-field instagram">
                            <a href="https://www.instagram.com/vigoncalves_p/" target="_blank">
                                <i class="fab fa-instagram"></i>
                                Sign in with Instagram
                            </div>

                            <div class="social-field facebook">
                            <a href="https://www.facebook.com/profile.php?id=100009290472669" target="_blank">
                              <i class="fab fa-facebook-f"></i>
                                Sign in with Facebook
                            </div>
                        
                        </div>
                </div>
            </section>

        </main>
            
        </form>
    </section>
  
    
    <script src="./js/script.js"></script>
    </body>
</html>
