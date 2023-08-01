(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[442],{RUwS:function(n,e,t){var i=t("nRna");i.__esModule&&(i=i.default),"string"==typeof i&&(i=[[n.i,i,""]]),i.locals&&(n.exports=i.locals);(0,t("ydqr").default)("06c88802",i,!0,{})},WkJ9:function(n,e,t){"use strict";t.r(e);var i=t("HZZ/"),s=t.n(i),r=t("hJxD"),a=t.n(r);t("RUwS"),e.default={template:'\n{% block sw_settings_mailer_index %}\n<sw-page class="sw-settings-mailer">\n\n    \n    {% block sw_settings_mailer_smart_bar_header %}\n    <template #smart-bar-header>\n        \n        {% block sw_settings_mailer_smart_bar_header_title %}\n        <h2>\n            \n            {% block sw_settings_mailer_smart_bar_header_title_text %}\n            {{ $tc(\'sw-settings.index.title\') }}\n            <sw-icon\n                name="regular-chevron-right-xs"\n                small\n            />\n            {{ $tc(\'sw-settings-mailer.general.textHeadline\') }}\n            {% endblock %}\n        </h2>\n        {% endblock %}\n    </template>\n    {% endblock %}\n\n    \n    {% block sw_settings_mailer_smart_bar_actions %}\n    <template #smart-bar-actions>\n        \n        {% block sw_settings_mailer_actions_save %}\n        <sw-button-process\n            :is-loading="isLoading"\n            :process-success="isSaveSuccessful"\n            variant="primary"\n            @process-finish="onSaveFinish"\n            @click="saveMailerSettings"\n        >\n            {{ $tc(\'sw-settings-mailer.general.buttonSave\') }}\n        </sw-button-process>\n        {% endblock %}\n    </template>\n    {% endblock %}\n\n    \n    {% block sw_settings_mailer_content %}\n    <template #content>\n        <sw-card-view>\n            <sw-skeleton v-if="isLoading" />\n\n            <sw-card\n                v-else\n                position-identifier="sw-settings-mailer-configuration"\n                :is-loading="isLoading"\n                :title="$tc(\'sw-settings-mailer.mailer-configuration.card-title\')"\n            >\n\n                \n                {% block sw_settings_mailer_first_configuration %}\n                <div\n                    v-if="isFirstConfiguration"\n                    class="sw-settings-mailer__first-configuration"\n                >\n                    \n                    {% block sw_settings_mailer_first_configuration_headline %}\n                    <h4 class="sw-settings-mailer__headline">\n                        <strong>\n                            {{ $tc(\'sw-settings-mailer.first-configuration.headline\') }}\n                        </strong>\n                    </h4>\n                    {% endblock %}\n\n                    \n                    {% block sw_settings_mailer_first_configuration_description %}\n                    <p>\n                        {{ $tc(\'sw-settings-mailer.first-configuration.description\') }}\n                    </p>\n                    {% endblock %}\n                </div>\n                {% endblock %}\n\n                \n                {% block sw_settings_mailer_headline_agent %}\n                <p class="sw-settings-mailer__headline">\n                    {{ $tc(\'sw-settings-mailer.mailer-configuration.agent\') }}\n                </p>\n                {% endblock %}\n\n                <div class="sw-settings-mailer__radio-selection">\n                    \n                    {% block sw_settings_mailer_agent_options %}\n                    <sw-select-field v-model="mailerSettings[\'core.mailerSettings.emailAgent\']">\n                        <option value="local">\n                            {{ $tc(\'sw-settings-mailer.mailer-configuration.local-agent\') }}\n                        </option>\n                        <option value="smtp">\n                            {{ $tc(\'sw-settings-mailer.mailer-configuration.smtp-server\') }}\n                        </option>\n                        <option value="">\n                            {{ $tc(\'sw-settings-mailer.mailer-configuration.env-file\') }}\n                        </option>\n                    </sw-select-field>\n\n                    <sw-field\n                        v-if="mailerSettings[\'core.mailerSettings.emailAgent\'] === \'local\'"\n                        v-model="mailerSettings[\'core.mailerSettings.sendMailOptions\']"\n                        type="radio"\n                        :options="emailSendmailOptions"\n                    />\n                    {% endblock %}\n                </div>\n\n                <p v-html="$tc(\'sw-settings-mailer.helpText\')"></p>\n                <sw-switch-field\n                    v-if="!isSmtpMode"\n                    v-model="mailerSettings[\'core.mailerSettings.disableDelivery\']"\n                    size="small"\n                    :label="$tc(\'sw-settings-mailer.card-smtp.disable-delivery\')"\n                />\n            </sw-card>\n\n            \n            {% block sw_settings_mailer_smtp %}\n            <sw-card\n                v-if="isSmtpMode"\n                position-identifier="sw-settings-mailer-smtp-settings"\n                :is-loading="isLoading"\n                title="SMTP server"\n                class="sw-settings-mailer__input-fields"\n            >\n\n                \n                {% block sw_settings_mailer_smtp_settings %}\n                <sw-settings-mailer-smtp\n                    :mailer-settings="mailerSettings"\n                    :host-error="smtpHostError"\n                    :port-error="smtpPortError"\n                    @host-changed="resetSmtpHostError"\n                    @port-changed="resetSmtpPortError"\n                />\n                {% endblock %}\n\n            </sw-card>\n            {% endblock %}\n        </sw-card-view>\n    </template>\n    {% endblock %}\n</sw-page>\n{% endblock %}\n',inject:["systemConfigApiService"],mixins:["notification"],data:function(){return{isLoading:!0,isSaveSuccessful:!1,isFirstConfiguration:!1,mailerSettings:{"core.mailerSettings.emailAgent":null,"core.mailerSettings.host":null,"core.mailerSettings.port":null,"core.mailerSettings.username":null,"core.mailerSettings.password":null,"core.mailerSettings.encryption":"null","core.mailerSettings.senderAddress":null,"core.mailerSettings.deliveryAddress":null,"core.mailerSettings.disableDelivery":!1},smtpHostError:null,smtpPortError:null}},metaInfo:function(){return{title:this.$createTitle()}},computed:{emailSendmailOptions:function(){return[{value:"-bs",name:this.$tc("sw-settings-mailer.sendmail.sync")},{value:"-t",name:this.$tc("sw-settings-mailer.sendmail.async")}]},isSmtpMode:function(){return"smtp"===this.mailerSettings["core.mailerSettings.emailAgent"]}},created:function(){this.createdComponent()},methods:{createdComponent:function(){var n=this;return s()(a.a.mark((function e(){return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,n.loadPageContent();case 2:case"end":return e.stop()}}),e)})))()},loadPageContent:function(){var n=this;return s()(a.a.mark((function e(){return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,n.loadMailerSettings();case 2:n.checkFirstConfiguration();case 3:case"end":return e.stop()}}),e)})))()},loadMailerSettings:function(){var n=this;return s()(a.a.mark((function e(){return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return n.isLoading=!0,e.next=3,n.systemConfigApiService.getValues("core.mailerSettings");case 3:n.mailerSettings=e.sent,0===Object.keys(n.mailerSettings).length&&(n.mailerSettings={"core.mailerSettings.emailAgent":"","core.mailerSettings.sendMailOptions":"-t"}),n.isLoading=!1;case 6:case"end":return e.stop()}}),e)})))()},saveMailerSettings:function(){var n=this;return s()(a.a.mark((function e(){return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(n.isLoading=!0,""===n.mailerSettings["core.mailerSettings.emailAgent"]&&(n.mailerSettings["core.mailerSettings.emailAgent"]=null),n.isSmtpMode&&n.validateSmtpConfiguration(),null===n.smtpHostError&&null===n.smtpPortError){e.next=7;break}return n.createNotificationError({title:n.$tc("global.default.error"),message:n.$tc("sw-settings-mailer.card-smtp.error.notificationMessage")}),n.isLoading=!1,e.abrupt("return");case 7:return e.next=9,n.systemConfigApiService.saveValues(n.mailerSettings);case 9:n.isLoading=!1;case 10:case"end":return e.stop()}}),e)})))()},onSaveFinish:function(){var n=this;return s()(a.a.mark((function e(){return a.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,n.loadPageContent();case 2:case"end":return e.stop()}}),e)})))()},checkFirstConfiguration:function(){this.isFirstConfiguration=!this.mailerSettings["core.mailerSettings.emailAgent"]},validateSmtpConfiguration:function(){this.smtpHostError=this.mailerSettings["core.mailerSettings.host"]?null:{detail:this.$tc("global.error-codes.c1051bb4-d103-4f74-8988-acbcafc7fdc3")},this.smtpPortError="number"!=typeof this.mailerSettings["core.mailerSettings.port"]?{detail:this.$tc("global.error-codes.c1051bb4-d103-4f74-8988-acbcafc7fdc3")}:null},resetSmtpHostError:function(){this.smtpHostError=null},resetSmtpPortError:function(){this.smtpPortError=null}}}},nRna:function(n,e,t){}}]);