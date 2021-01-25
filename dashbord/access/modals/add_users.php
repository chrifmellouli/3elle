<div aria-hidden="true" class="modal fade" id="addUserRowModal" role="dialog"
     tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header no-bd">
                <h5 class="modal-title">
                    <span class="fw-mediumbold">Nouveau</span>
                    <span class="fw-light">Utilisateur</span>
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="small">Créer un nouveau utilisateur en utilisant ce formulaire,
                    assuez vous que vous remplissez tous les champs.</p>
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label for="user_name">Identifiant</label>
                                <input class="form-control" id="user_name"
                                       name="user_name" placeholder="Identifiant"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-group-default">
                                <label for="password">Mot de passe</label>
                                <input class="form-control" id="password"
                                       name="password" placeholder="Mot de passe"
                                       type="password">
                            </div>
                        </div>
                        <div class="col-md-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="name">Prénom</label>
                                <input class="form-control" id="name"
                                       name="name" placeholder="Prénom"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-default">
                                <label for="last_name">Nom</label>
                                <input class="form-control" id="last_name"
                                       name="last_name" placeholder="Nom"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 pr-0">
                            <div class="form-group form-group-default">
                                <label for="position">Position</label>
                                <input class="form-control" id="position"
                                       name="position" placeholder="Mot de passe"
                                       type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-check">
                                <label>Active ?</label><br>
                                <label class="form-radio-label">
                                    <input class="form-radio-input" type="radio" name="enable" value="1"
                                           checked="">
                                    <span class="form-radio-sign">Oui</span>
                                </label>
                                <label class="form-radio-label ml-3">
                                    <input class="form-radio-input" type="radio" name="enable" value="0">
                                    <span class="form-radio-sign">Nom</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer no-bd">
                <button class="btn btn-primary" id="addUserRowModal" type="button">
                    Add
                </button>
                <button class="btn btn-danger" data-dismiss="modal"
                        type="button">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
