<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Login - 3ELLE ADMIN - Dashbord</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/atlantis.min.css">
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
</head>
<body>
<div id="content" class="flex">
    <div class="container">
        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><strong>Identifiez vous SVP</strong></div>
                            <div class="card-body">
                                <form method="post" action="../controllers/user.controller.php?action=connexion">
                                    <div class="form-group">
                                        <label class="text-muted" for="user_name">Identifiant</label>
                                        <input type="text" class="form-control"
                                               id="user_name" name="user_name" aria-describedby="user_name_help"
                                               placeholder="Entrer votre identifiant" required>
                                        <small id="user_name_help"
                                               class="form-text text-muted">
                                            C'est votre identifiant, c'est votre petit secret. Ne le partager avec
                                            personne SVP!
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="password">Mot de passe</label>
                                        <input type="password" class="form-control" id="password"
                                               name="password" placeholder="Mot de passe" required>
                                        <small id="passwordHelp" class="form-text text-muted">
                                            Votre mot de passe ne doit
                                            être partagée avec personne SVP!
                                        </small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Connexion</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>