[{oxscript include="js/widgets/oxreview.js" priority=10 }]
[{oxscript add="$( '#writeNewReview' ).oxReview();"}]
[{if $oxcmp_user}]
    [{if !$oView->floodProtection() }]
        <form action="[{$oViewConf->getSelfActionLink()}]" method="post" id="rating">
            <div id="writeReview">
                [{$oViewConf->getHiddenSid()}]
                [{$oViewConf->getNavFormParams()}]
                [{oxid_include_dynamic file="form/formparams.tpl"}]
                <input type="hidden" name="fnc" value="saveEntry">
                <input type="hidden" name="cl" value="[{ $oViewConf->getActiveClassName() }]">
                <label>[{ oxmultilang ident="FORM_GUESTBOOKENTRY_YOURMESSAGE" }]</label>
                <textarea cols="102" rows="15" name="rvw_txt" class="areabox"></textarea><br>
                <button id="reviewSave" type="submit" class="submitButton">[{oxmultilang ident="FORM_GUESTBOOKENTRY_SEND"}]</button>
            </div>
        </form>
        <a id="writeNewReview" rel="nofollow"><b>[{oxmultilang ident="FORM_GUESTBOOK_CLICKHERETOWRITEENTRY"}]</b></a>
    [{/if}]
[{else}]
    <a href="[{ oxgetseourl ident=$oViewConf->getSelfLink()|cat:"cl=account" params="sourcecl="|cat:$oViewConf->getActiveClassName()|cat:$oViewConf->getNavUrlParams() }]" rel="nofollow"><b>[{ oxmultilang ident="FORM_GUESTBOOK_YOUHAVETOBELOGGED" }]</b></a>
[{/if}]
