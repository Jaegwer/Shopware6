(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[346],{"1FRn":function(e,t,i){},"8fqS":function(e,t,i){"use strict";i.r(t);i("gYrb"),t.default={template:'\n{% block sw_condition_base_field_condition %}\n<sw-arrow-field\n    v-if="options.length > 1"\n    class="sw-product-stream-field-select"\n    :class="{ \'has--error\': hasError }"\n    :primary="arrowPrimaryColor"\n    secondary="#ffffff"\n>\n    <sw-single-select\n        size="medium"\n        :options="options"\n        :value="field"\n        :placeholder="$tc(\'sw-product-stream.filter.placeholderFieldSelect\')"\n        :disabled="disabled"\n        show-clearable-button\n        @change="changeField"\n    />\n</sw-arrow-field>\n{% endblock %}\n',inject:["conditionDataProviderService","productCustomFields"],props:{definition:{type:Object,required:!0},field:{type:String,required:!1,default:null},index:{type:Number,required:!0},disabled:{type:Boolean,required:!1,default:!1},hasError:{type:Boolean,required:!1,default:!1}},computed:{options:function(){var e=this,t=Object.keys(this.definition.properties).map((function(t){return e.conditionDataProviderService.isPropertyInAllowList(e.definition.entity,t)?"id"===t?{label:e.getPropertyTranslation(e.definition.entity),value:t}:{label:e.getPropertyTranslation(t),value:t}:null})).filter((function(e){return null!==e}));return"product"===this.definition.entity&&(Object.values(this.conditionDataProviderService.allowedJsonAccessors).forEach((function(i){t.push({label:e.getPropertyTranslation(i.trans),value:i.value})})),Object.keys(this.productCustomFields).forEach((function(i){t.push(e.productCustomFields[i])}))),t},arrowPrimaryColor:function(){return this.hasError?"#de294c":"#758ca3"}},watch:{"definition.entity":{immediate:!0,handler:function(e){e&&1===this.options.length&&!this.field&&this.changeField(this.options[0].value)}},field:{handler:function(e){this.definition.entity&&1===this.options.length&&!e&&this.changeField(this.options[0].value)}}},methods:{changeField:function(e){this.$emit("field-changed",{field:e,index:this.index})},getPropertyTranslation:function(e){var t="sw-product-stream.filter.values.".concat(e),i=this.$tc(t);return i===t?e:i}}}},gYrb:function(e,t,i){var n=i("1FRn");n.__esModule&&(n=n.default),"string"==typeof n&&(n=[[e.i,n,""]]),n.locals&&(e.exports=n.locals);(0,i("ydqr").default)("505a379a",n,!0,{})}}]);