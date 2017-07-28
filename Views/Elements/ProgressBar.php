<div class="col-xs-12 col-md-12 col-lg-12 text-center progress">
    <div class="stepwizard">
        <div class="stepwizard-row">
            <div class="stepwizard-step">
                <button type="button" class="btn btn-primary btn-circle" >1</button>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-<?= ($passed_data == 2 || $passed_data == 3) ? 'primary':'default' ?> btn-circle">2</button>
            </div>
            <div class="stepwizard-step">
                <button type="button" class="btn btn-<?= ($passed_data == 3) ? 'primary':'default' ?> btn-circle" disabled="disabled">3</button>
            </div>
        </div>
    </div>
</div>