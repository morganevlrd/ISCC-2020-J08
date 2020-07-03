<body>

<p><form action="index.php?page=contact-form" method="post">
       <div>
            <label for="name/firstname">Nom/Prenom :</label>
            <input type="text" id="name" name="user_name">
        </div>
        <div>
             <label for="mail">e-mail:</label>
             <input type="email" id="mail" name="user_mail">
        </div>
        <div>
             <label for="msg">message :</label>
             <textarea name="user_message" id="msg" ></textarea>
        </div>
        <input type="submit" value="envoyer" />
    </form></p>

    <?php
    echo "nom prénom : ".$_POST{'user_name'};
    echo "nom prénom : ".$_POST{'user_mail'};
    echo "nom prénom : ".$_POST{'user_message'};
    ?>

</body>