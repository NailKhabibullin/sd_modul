<div class="ty-mainbox-body cm-dialog-auto-open">
    <form method="post" name="age" class="cm-processed-form">
    <div class="ty-age-verification-birthday">
        <div class="ty-control-group">
            <label class="ty-control-group__title" for="birthday">{__("birthday")}</label>
            {include file="common/calendar.tpl" date_id="birthday" date_name="guest_data[birthday]" date_val=$guest_data.birthday}
        </div>
    </div>
        <div class="buttons-container">
            <button class="ty-btn__secondary ty-btn" type="submit" name="send">Подтвердить</button>
        </div>
    </form>
</div>
