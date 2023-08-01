(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[249],{"j/zZ":function(n,i,e){},mpYm:function(n,i,e){var t=e("j/zZ");t.__esModule&&(t=t.default),"string"==typeof t&&(t=[[n.i,t,""]]),t.locals&&(n.exports=t.locals);(0,e("ydqr").default)("5bd6d2ae",t,!0,{})},ut0F:function(n,i,e){"use strict";e.r(i);e("mpYm"),i.default={template:'\n{% block sw_first_run_wizard_shopware_domain %}\n<div class="sw-first-run-wizard-shopware-domain">\n    <h3 class="headline">\n        {{ $tc(\'sw-first-run-wizard.shopwareDomain.headline\') }}\n    </h3>\n    <p\n        class="message"\n        v-html="$tc(\'sw-first-run-wizard.shopwareDomain.message\')"\n    ></p>\n\n    <sw-switch-field\n        v-model="createShopDomain"\n        :label="$tc(\'sw-first-run-wizard.shopwareDomain.labelCreateDomain\')"\n    />\n\n    <div v-if="createShopDomain">\n        <sw-field\n            v-model="newShopDomain"\n            type="text"\n            name="newShopDomain"\n            validation="required"\n            :label="\'Shop domain\'"\n        />\n        <sw-checkbox-field\n            v-model="testEnvironment"\n            :label="$tc(\'sw-first-run-wizard.shopwareDomain.testEnvironment\')"\n        />\n    </div>\n    <div v-else-if="licenceDomains.length > 0">\n        <sw-select-field\n            v-model="selectedShopDomain"\n            label="Shop domain"\n            placeholder=""\n        >\n            <option\n                v-for="domain in licenceDomains"\n                :key="domain.domain"\n                :value="domain.domain"\n            >\n                {{ domain.domain }}\n            </option>\n        </sw-select-field>\n    </div>\n    <div\n        v-if="domainError"\n        class="sw-first-run-wizard-shopware-domain__error"\n    >\n        <sw-alert\n            :title="domainError.title"\n            variant="error"\n            appearance="notification"\n        >\n            {{ domainError.detail }}\n        </sw-alert>\n    </div>\n\n    <sw-loader v-if="isLoading" />\n</div>\n{% endblock %}\n',inject:["firstRunWizardService"],data:function(){return{licenceDomains:[],selectedShopDomain:"",createShopDomain:!1,newShopDomain:"",testEnvironment:!1,domainError:null,isLoading:!1}},computed:{domainToVerify:function(){return this.createShopDomain?this.newShopDomain:this.selectedShopDomain},isDomainEmpty:function(){return this.domainToVerify.length<=0}},watch:{isDomainEmpty:function(){this.updateButtons()}},created:function(){this.createdComponent()},methods:{createdComponent:function(){var n=this;this.isLoading=!0,this.updateButtons(),this.setTitle(),this.firstRunWizardService.getLicenseDomains().then((function(i){var e=i.items;!e||e.length<1||(n.licenceDomains=e,n.selectedShopDomain=e[0].domain)})).finally((function(){n.licenceDomains.length<=0&&(n.createShopDomain=!0),n.isLoading=!1}))},setTitle:function(){this.$emit("frw-set-title",this.$tc("sw-first-run-wizard.shopwareAccount.modalTitle"))},updateButtons:function(){var n=[{key:"back",label:this.$tc("sw-first-run-wizard.general.buttonBack"),position:"left",variant:null,action:"sw.first.run.wizard.index.shopware.account",disabled:!1},{key:"next",label:this.$tc("sw-first-run-wizard.general.buttonNext"),position:"right",variant:"primary",action:this.verifyDomain.bind(this),disabled:this.isDomainEmpty}];this.$emit("buttons-update",n)},verifyDomain:function(){var n=this,i=this.testEnvironment,e=this.domainToVerify;return this.domainError=null,this.firstRunWizardService.verifyLicenseDomain({domain:e,testEnvironment:i}).then((function(){return n.$emit("frw-redirect","sw.first.run.wizard.index.store"),!1})).catch((function(i){var e=i.response.data.errors.pop();return n.domainError=e,!0}))}}}}}]);