(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[319],{"/Mx2":function(e,d,n){var r=n("Iv16");r.__esModule&&(r=r.default),"string"==typeof r&&(r=[[e.i,r,""]]),r.locals&&(e.exports=r.locals);(0,n("ydqr").default)("f6ab86a8",r,!0,{})},IRif:function(e,d,n){"use strict";n.r(d);n("/Mx2"),d.default={template:'\n{% block sw_order_delivery_metadata %}\n<sw-card\n    class="sw-order-delivery-metadata"\n    position-identifier="sw-order-delivery-metadata"\n    :title="title"\n    :is-loading="isLoading"\n>\n    \n    {% block sw_order_delivery_metadata_deliveries %}\n    <sw-container\n        columns="repeat(auto-fit, minmax(250px, 1fr))"\n        gap="0 30px"\n    >\n        \n        {% block sw_order_delivery_metadata_deliveries_data %}\n        <sw-description-list>\n            \n            {% block sw_order_delivery_metadata_shipping_method %}\n            <dt>{{ $tc(\'sw-order.detailDeliveries.labelShippingMethod\') }}</dt>\n            <dd>{{ delivery.shippingMethod.translated.name }}</dd>\n            {% endblock %}\n\n            \n            {% block sw_order_delivery_metadata_delivery_date %}\n            <dt>{{ $tc(\'sw-order.detailDeliveries.labelDeliveryDate\') }}</dt>\n            <dd>{{ delivery.shippingDateEarliest | date }}</dd>\n            {% endblock %}\n\n            \n            {% block sw_order_delivery_metadata_shipping_costs %}\n            <dt>{{ $tc(\'sw-order.detailDeliveries.labelShippingCosts\') }}</dt>\n            <dd>{{ order.shippingTotal | currency(order.currency.shortName) }}</dd>\n            {% endblock %}\n\n            \n            {% block sw_order_delivery_metadata_slot %}\n            {% endblock %}\n\n        </sw-description-list>\n        {% endblock %}\n        \n        {% block sw_order_delivery_metadata_shipping_address %}\n        <sw-description-list>\n            <sw-address\n                class="sw-order-delivery-metdata__address"\n                :headline="$tc(\'sw-order.detailBase.headlineDeliveryAddress\')"\n                :address="delivery.shippingOrderAddress"\n                :formatting-address="formattingAddress"\n            />\n            \n            {% block sw_order_delivery_metadata_delivery_phone_number %}\n            <dt>{{ $tc(\'sw-order.detailBase.labelCustomerPhoneNumber\') }}</dt>\n            <dd v-if="delivery.shippingOrderAddress.phoneNumber">\n                {{ delivery.shippingOrderAddress.phoneNumber }}\n            </dd>\n            <dd v-else>\n                {{ $tc(\'sw-order.detailBase.labelNoPhoneNumber\') }}\n            </dd>\n            {% endblock %}\n        </sw-description-list>\n        {% endblock %}\n    </sw-container>\n    {% endblock %}\n</sw-card>\n{% endblock %}\n',inject:["customSnippetApiService"],props:{delivery:{type:Object,required:!0,default:function(){}},order:{type:Object,required:!0,default:function(){}},title:{type:String,required:!1,default:null},isLoading:{type:Boolean,required:!1,default:!1}},data:function(){return{formattingAddress:""}},created:function(){this.createdComponent()},methods:{createdComponent:function(){this.renderFormattingAddress()},renderFormattingAddress:function(){var e=this;this.customSnippetApiService.render(this.delivery.shippingOrderAddress,this.delivery.shippingOrderAddress.country.addressFormat).then((function(d){e.formattingAddress=d.rendered}))}}}},Iv16:function(e,d,n){}}]);