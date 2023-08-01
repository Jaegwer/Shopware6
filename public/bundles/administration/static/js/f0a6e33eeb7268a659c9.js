(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[264],{"4H0c":function(t,n,e){var a=e("ztc2");a.__esModule&&(a=a.default),"string"==typeof a&&(a=[[t.i,a,""]]),a.locals&&(t.exports=a.locals);(0,e("ydqr").default)("d2b7f0e0",a,!0,{})},"9e12":function(t,n,e){"use strict";e.r(n);var a=e("HZZ/"),o=e.n(a),s=e("hJxD"),l=e.n(s),i=(e("4H0c"),Shopware.Data.Criteria);n.default=Shopware.Component.wrapComponentConfig({template:'<sw-page class="sw-flow-list-index">\n    <template #search-bar>\n        <sw-search-bar\n            initial-search-type="flow"\n            :placeholder="$tc(\'sw-flow.general.placeholderSearchBar\')"\n            :initial-search="term"\n            @search="onSearch"\n        />\n    </template>\n\n    <template #smart-bar-header>\n        <h2>\n            {{ $tc(\'sw-settings.index.title\') }}\n            <sw-icon\n                name="regular-chevron-right-xs"\n                small\n            />\n            {{ $tc(\'sw-flow.list.textHeadline\') }}\n\n            <span\n                v-if="!isLoading"\n                class="sw-page__smart-bar-amount"\n            >\n                ({{ total }})\n            </span>\n        </h2>\n    </template>\n\n    <template #smart-bar-actions>\n        \n        {% block sw_flow_index_smart_bar_actions_extension %}\n        {% endblock %}\n\n        <sw-button\n            v-tooltip="{\n                message: $tc(\'sw-privileges.tooltip.warning\'),\n                disabled: acl.can(\'flow.creator\'),\n                position: \'bottom\',\n                showOnDisabledElements: true\n            }"\n            class="sw-flow-list__create"\n            variant="primary"\n            :router-link="{ name: \'sw.flow.create\' }"\n            :disabled="!acl.can(\'flow.creator\')"\n        >\n            {{ $tc(\'sw-flow.list.buttonAddFlow\') }}\n        </sw-button>\n    </template>\n\n    <template #content>\n        <sw-card-view>\n            <sw-tabs\n                class="sw-flow-list__tab"\n                position-identifier="sw-flow-listing"\n                :small="false"\n            >\n                <sw-tabs-item\n                    class="sw-flow-listing__tab-my-flows"\n                    name="flows"\n                    :title="$tc(\'sw-flow.general.tabMyFlows\')"\n                    :route="{ name: \'sw.flow.index.flows\'}"\n                >\n                    {{ $tc(\'sw-flow.general.tabMyFlows\') }}\n                </sw-tabs-item>\n\n                <sw-tabs-item\n                    class="sw-flow-listing__tab-flow-templates"\n                    name="templates"\n                    :title="$tc(\'sw-flow.general.tabFlowTemplates\')"\n                    :route="{ name: \'sw.flow.index.templates\'}"\n                >\n                    {{ $tc(\'sw-flow.general.tabFlowTemplates\') }}\n                </sw-tabs-item>\n\n                \n                {% block sw_flow_tabs_header_extension %}{% endblock %}\n\n                <template #content="{ active }">\n                    <template v-if="isLoading">\n                        <sw-skeleton />\n                        <sw-skeleton />\n                    </template>\n\n                    <router-view\n                        v-else\n                        :is-loading="isLoading"\n                        :search-term="term"\n                        @on-update-total="onUpdateTotalFlow"\n                    />\n                </template>\n            </sw-tabs>\n        </sw-card-view>\n\n        \n        {% block sw_flow_index_modal_content_custom %}\n        {% endblock %}\n    </template>\n</sw-page>\n',inject:["acl","repositoryFactory"],data:function(){return{isLoading:!1,term:"",total:0,showUploadModal:!1}},metaInfo:function(){return{title:this.$createTitle()}},computed:{flowRepository:function(){return this.repositoryFactory.create("flow")},flowCriteria:function(){return new i(1,null)}},created:function(){this.createComponent()},methods:{createComponent:function(){this.getTotal()},getTotal:function(){var t=this;return o()(l.a.mark((function n(){var e,a;return l.a.wrap((function(n){for(;;)switch(n.prev=n.next){case 0:return n.next=2,t.flowRepository.searchIds(t.flowCriteria);case 2:e=n.sent,a=e.total,t.total=a;case 5:case"end":return n.stop()}}),n)})))()},onUpdateTotalFlow:function(t){this.total=t},onSearch:function(t){this.term=t}}})},ztc2:function(t,n,e){}}]);