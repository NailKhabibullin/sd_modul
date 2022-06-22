<div tabindex="-1" role="dialog" class="ui-dialog ui-corner-all ui-widget ui-widget-content ui-front" style="height: auto; width: 800px; top: 300px; left: 375px; z-index: 1100;">
    <div class="object-container " style="height: 202px;">
        <div class="control-group">
        <label class="control-label" style="text-align: center; vertical-align: middle;">{__("access_need_age_verification")}</label>
            <form method="post" name="age" class="cm-processed-form">
            <div class="ty-age-verification-birthday">
                <div class="ty-control-group">
                    <label class="ty-control-group__title" for="birthday">{__("birthday_date")}</label>
                    {include file="common/calendar.tpl" date_id="birthday" date_name="guest_data[birthday]" date_val=$guest_data.birthday}
                </div>
            </div>
            <div class="buttons-container">
                <button class="ty-btn__secondary ty-btn" type="submit" name="send">{__("push_confirm")}</button>
            </div>
            </form>
        </div>
    </div>
</div>

<div class="ui-widget-overlay ui-front" style="z-index: 100;"></div>
<div class="ui-widget-overlay ui-front" style="z-index: 100;"></div>
<div class="ui-widget-overlay ui-front" style="z-index: 100;"></div>
<div class="ui-widget-overlay ui-front" style="z-index: 100;"></div>
