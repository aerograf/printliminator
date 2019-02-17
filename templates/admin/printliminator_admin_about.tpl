<div class="top"><{$navigation}><{$module_about}></div>
<div id="Printliminator_Title" class="bold shadowlight alignmiddle">
    <div id="Printliminator_About">
        <{$smarty.const._AM_PRINTLIMINATOR_MANAGER_ABOUT1}>
    </div>
    <div id="Printliminator_Action">
    </div>
</div>
<div id="about">
	<table class="width90 floatcenter0">
		<tr>
			<td class="aligntop width45">
				<fieldset>
					<legend class="Printliminator_MediumTitle bold shadowlight"><{$module_name}></legend>
					<div>
						<img class="logo" src="<{$smarty.const.XOOPS_URL}>/modules/<{$module_dirname}>/<{$module_image}>" alt="" /><br>
						<label><{$module_name}> Version : </label><text><{$module_version}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_RELEASEDATE}> : </label><text><{$module_release}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_AUTHOR}> : </label><text><{$module_author}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_CREDITS}> : </label><text><{$module_credits}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_LICENSE}> : </label><text><a class="tooltip" href="<{$module_license_url}>" rel="external" title="<{$module_license}><br><{$module_license_url}>"><{$module_license}></a></text>
					</div>
				</fieldset>
				<fieldset>
					<legend class="Printliminator_MediumTitle bold shadowlight"><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_MODULE_INFO}></legend>
					<div>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_LASTUPDATE}></label><text class="bold"><{$module_update_date}></text></br />
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_MODULE_STATUS}> : </label><text><{$module_status}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_WEBSITE}> : </label><text><a class="tooltip" href="<{$module_website_url}>" rel="external" title="<{$module_website_name}> - <{$module_website_url}>"><{$module_website_name}></a></text><br>
					</div>
				</fieldset>
				<fieldset>
					<legend class="Printliminator_MediumTitle bold shadowlight"><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_AUTHOR_INFO}></legend>
					<div>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_AUTHOR_NAME}> : </label><text><{$module_author}></text><br>
						<label><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_WEBSITE}> : </label><text><a class="tooltip" href="<{$author_website_url}>" rel="external" title="<{$author_website_name}><br><{$author_website_url}>"><{$author_website_name}></a></text><br>
					</div>
				</fieldset>
			</td><td></td>
			<td class="aligntop width50">
				<{if $changelog}>
					<fieldset>
						<legend class="Printliminator_MediumTitle bold shadowlight"><{$smarty.const._AM_PRINTLIMINATOR_ABOUT_CHANGELOG}></legend>
						<div class="txtchangelog"><{$changelog}></div>
					</fieldset>
				<{/if}>
			</td>
		</tr>
	</table>
</div>