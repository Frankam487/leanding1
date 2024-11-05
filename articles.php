    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Articles</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./styles/pages/articles.css">
    </head>
    <body>
      <div class="articles">

        <div class="container-form">
          <form action="" method="post">
            <div class="name-surname">

              <div class="name">
                <label for="name">Nom*</label>
                <input type="text" placeholder="entrer votre nom">
              </div>
              <div class="surname">
                <label for="surname">Prénom*</label>
                <input type="text" id="surname" placeholder="entrer votre prénom">
              </div>
            </div>
        
        <div class="email">
          <label for="email">Email*</label>
          <input type="text" id="email" placeholder="entrer votre nom">
        </div>

        <div class="mail-confirm">
          <label for="mail-confirm">Confirm-email*</label>
          <input type="email" placeholder="entrer votre nom" id="mail-confirm">
        </div>

          <div class="mdp">
          <label for="mdp">Mot de passe*</label>
          <input type="password" placeholder="entrer votre nom">
            </div>

          <div class="confirm">
          <label for="confirm">Confirmer mot de passe*</label>
          <input type="password" placeholder="confirmer le mot de passe">
        </div>
        
        <div class="btnValided">
          <a href="./listArticles.php">Valider</a>
          <a href="./index.php">Annuler</a>
        </div>
      </form>
    </div>
    </div>
    </body>
    </html>