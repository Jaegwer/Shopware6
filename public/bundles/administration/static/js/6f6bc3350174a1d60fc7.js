(this.webpackJsonpAdministration=this.webpackJsonpAdministration||[]).push([[39],{DoAe:function(e,n,t){var i=t("nmBr");i.__esModule&&(i=i.default),"string"==typeof i&&(i=[[e.i,i,""]]),i.locals&&(e.exports=i.locals);(0,t("ydqr").default)("10bd4154",i,!0,{})},KRSP:function(e,n,t){"use strict";t.r(n);var i=t("HZZ/"),a=t.n(i),o=t("hJxD"),m=t.n(o),l=(t("DoAe"),Shopware.Mixin),d=Shopware.Utils.dom;n.default={template:'\n{% block sw_media_media_item %}\n<sw-media-base-item\n    class="sw-media-media-item"\n    v-bind="$attrs"\n    v-on="$listeners"\n>\n\n    \n    {% block sw_media_media_item_preview %}\n    <template #preview="{ item }">\n        <sw-media-preview-v2\n            :source="item.id"\n            :media-is-private="item.private"\n            @media-preview-play="emitPlayEvent($event, item)"\n        />\n    </template>\n    {% endblock %}\n\n    \n    {% block sw_media_media_item_name_container %}\n    <template #name="{ item, isInlineEdit, startInlineEdit, endInlineEdit }">\n        <sw-field\n            v-if="isInlineEdit"\n            v-autofocus\n            class="sw-media-base-item__name-field"\n            :value="item.fileName"\n            name="media-item-name"\n            @change="onChangeName($event, item, endInlineEdit)"\n            @blur="onBlur($event, item, endInlineEdit)"\n            @keyup.esc="endInlineEdit"\n            @click.stop\n        />\n        <div\n            v-else\n            ref="itemName"\n            class="sw-media-base-item__name"\n            :title="`${item.fileName}.${item.fileExtension}`"\n            @dblclick="startInlineEdit"\n        >\n\n            <template v-if="item.hasFile">\n                {{ item | mediaName }}\n            </template>\n        </div>\n    </template>\n    {% endblock %}\n\n    \n    {% block sw_media_media_item_metadata %}\n    <template #metadata="{ item }">\n        <div class="sw-media-media-item__metadata">\n            {{ item.uploadedAt | date() }}, {{ item.fileSize | fileSize(locale) }}\n        </div>\n    </template>\n    {% endblock %}\n\n    \n    {% block sw_media_media_item_context_menu %}\n    <template #context-menu="{ item, startInlineEdit, allowEdit, allowDelete }">\n        <slot>\n            \n            {% block sw_media_media_item_additional_context_menu_slot %}{% endblock %}\n        </slot>\n\n        \n        {% block sw_media_media_item_context_group_quick_actions %}\n        <div :class="defaultContextMenuClass">\n            \n            {% block sw_media_media_item_context_item_rename_item %}\n            <sw-context-menu-item\n                :disabled="!item.hasFile || item.private || !allowEdit"\n                @click="startInlineEdit"\n            >\n                {{ $tc(\'global.sw-media-media-item.labelContextMenuRename\') }}\n            </sw-context-menu-item>\n            {% endblock %}\n\n            \n            {% block sw_media_media_item_context_item_copy_item_link %}\n            <sw-context-menu-item\n                v-if="item.hasFile"\n                @click="copyItemLink(item)"\n            >\n                {{ $tc(\'global.sw-media-media-item.labelContextMenuCopyLink\') }}\n            </sw-context-menu-item>\n            {% endblock %}\n\n            \n            {% block sw_media_media_item_context_item_replace %}\n            <sw-context-menu-item\n                :disabled="item.private || !allowEdit"\n                class="sw-media-context-item__replace-media-action"\n                @click="openModalReplace"\n            >\n                {{ $tc(\'global.sw-media-media-item.labelContextMenuReplace\') }}\n            </sw-context-menu-item>\n            {% endblock %}\n\n            \n            {% block sw_media_media_item_context_item_move %}\n            <sw-context-menu-item\n                :disabled="!allowEdit"\n                class="sw-media-context-item__move-media-action"\n                @click="openModalMove"\n            >\n                {{ $tc(\'global.sw-media-media-item.labelContextMenuMove\') }}\n            </sw-context-menu-item>\n            {% endblock %}\n\n            \n            {% block sw_media_media_item_context_item_delete %}\n            <sw-context-menu-item\n                :disabled="item.private || !allowDelete"\n                variant="danger"\n                @click="openModalDelete"\n            >\n                {{ $tc(\'global.default.delete\') }}\n            </sw-context-menu-item>\n            {% endblock %}\n\n        </div>\n        {% endblock %}\n    </template>\n    {% endblock %}\n\n    <template #modal-windows="{ item, allowEdit, allowDelete }">\n        \n        {% block sw_media_media_item_modal_replace %}\n        <sw-media-modal-replace\n            v-if="showModalReplace && allowEdit"\n            :item-to-replace="item"\n            @media-replace-modal-item-replaced="emitRefreshMediaLibrary"\n            @media-replace-modal-close="closeModalReplace"\n        />\n        {% endblock %}\n\n        \n        {% block sw_media_media_item_delete_modal %}\n        <sw-media-modal-delete\n            v-if="showModalDelete && allowDelete"\n            :items-to-delete="[item]"\n            @media-delete-modal-items-delete="emitItemDeleted"\n            @media-delete-modal-close="closeModalDelete"\n        />\n        {% endblock %}\n\n        \n        {% block sw_media_media_item_move_modal %}\n        <sw-media-modal-move\n            v-if="showModalMove && allowEdit"\n            :items-to-move="[item]"\n            @media-move-modal-close="closeModalMove"\n            @media-move-modal-items-move="onMediaItemMoved"\n        />\n        {% endblock %}\n    </template>\n</sw-media-base-item>\n{% endblock %}\n',inheritAttrs:!1,inject:["mediaService"],mixins:[l.getByName("notification")],data:function(){return{showModalReplace:!1,showModalDelete:!1,showModalMove:!1}},computed:{locale:function(){return this.$root.$i18n.locale},defaultContextMenuClass:function(){return{"sw-context-menu__group":this.$slots.default}}},methods:{onChangeName:function(e,n,t){var i=this;return a()(m.a.mark((function a(){return m.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:if(e&&e.trim()){a.next=3;break}return i.rejectRenaming(t),a.abrupt("return");case 3:return n.isLoading=!0,a.prev=4,a.next=7,i.mediaService.renameMedia(n.id,e);case 7:n.fileName=e,n.isLoading=!1,i.createNotificationSuccess({message:i.$tc("global.sw-media-media-item.notification.renamingSuccess.message")}),i.$emit("media-item-rename-success",n),a.next=16;break;case 13:a.prev=13,a.t0=a.catch(4),i.createNotificationError({message:i.$tc("global.sw-media-media-item.notification.renamingError.message")});case 16:return a.prev=16,n.isLoading=!1,t(),a.finish(16);case 20:case"end":return a.stop()}}),a,null,[[4,13,16,20]])})))()},rejectRenaming:function(e){this.createNotificationError({message:this.$tc("global.sw-media-media-item.notification.errorBlankItemName.message")}),e()},onBlur:function(e,n,t){var i=e.target.value;i===n.fileName&&(i&&i.trim()?t():this.rejectRenaming(n,"empty-name",t))},emitPlayEvent:function(e,n){this.selected?this.removeFromSelection(e):this.$emit("media-item-play",{originalDomEvent:e,item:n})},copyItemLink:function(e){d.copyToClipboard(e.url),this.createNotificationSuccess({message:this.$tc("sw-media.general.notification.urlCopied.message")})},openModalDelete:function(){this.showModalDelete=!0},closeModalDelete:function(){this.showModalDelete=!1},emitItemDeleted:function(e){var n=this;return a()(m.a.mark((function t(){var i;return m.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return n.closeModalDelete(),t.next=3,e;case 3:i=t.sent,n.$emit("media-item-delete",i.mediaIds);case 5:case"end":return t.stop()}}),t)})))()},openModalReplace:function(){this.showModalReplace=!0},closeModalReplace:function(){this.showModalReplace=!1},openModalMove:function(){this.showModalMove=!0},closeModalMove:function(){this.showModalMove=!1},onMediaItemMoved:function(e){var n=this;return a()(m.a.mark((function t(){var i;return m.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return n.closeModalMove(),t.next=3,e;case 3:i=t.sent,n.$emit("media-folder-move",i);case 5:case"end":return t.stop()}}),t)})))()},emitRefreshMediaLibrary:function(){var e=this;this.closeModalReplace(),this.$nextTick((function(){e.$emit("media-item-replaced")}))}}}},nmBr:function(e,n,t){}}]);