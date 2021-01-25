<?php
if ( isset( $_REQUEST[ 'auths' ] ) ) {
    $serialised_auths = $_REQUEST[ 'auths' ];
    $safe_object = str_replace ( "~~~~", "\0", $serialised_auths );
    $auths = (array)unserialize ( $safe_object );
} else {
    $auths = [];
}
?>
<div class="table-responsive">
    <table class="display table table-striped table-hover"
           id="multi-filter-select">
        <thead>
        <tr>
            <th>Utilisateur</th>
            <th>Permission</th>
            <th style="width: 10%;">Action</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>Utilisateur</th>
            <th>Permission</th>
            <th>Action</th>
        </tr>
        </tfoot>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <div class="form-button-action">
                    <button type="button" data-toggle="tooltip" title=""
                            class="btn btn-link btn-primary btn-lg"
                            data-original-title="Edit Task">
                        <i class="fa fa-edit"></i>
                    </button>
                    <button type="button" data-toggle="tooltip" title=""
                            class="btn btn-link btn-danger"
                            data-original-title="Remove">
                        <i class="fa fa-times"></i>
                    </button>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
