(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[77],{LOxa:function(e,n,t){"use strict";t.r(n);t("ih+D");var c=Shopware.State;n.default={template:'\n{% block sw_cms_block_product_heading %}\n<div\n    class="sw-cms-block-product-heading"\n    :class="currentDeviceViewClass"\n>\n    <slot name="left">\n        \n        {% block sw_cms_block_product_heading_slot_left %}{% endblock %}\n    </slot>\n\n    <slot name="right">\n        \n        {% block sw_cms_block_product_heading_slot_right %}{% endblock %}\n    </slot>\n</div>\n{% endblock %}\n',computed:{currentDeviceView:function(){return c.get("cmsPageState").currentCmsDeviceView},currentDeviceViewClass:function(){return this.currentDeviceView?"is--".concat(this.currentDeviceView):null}}}},SrA4:function(e,n,t){},"ih+D":function(e,n,t){var c=t("SrA4");c.__esModule&&(c=c.default),"string"==typeof c&&(c=[[e.i,c,""]]),c.locals&&(e.exports=c.locals);(0,t("ydqr").default)("4f7dacd8",c,!0,{})}}]);