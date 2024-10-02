<script setup>
import ElPanel from "@/Components/ElPanel.vue";
import ElDataTable from "@/Components/Table/ElDataTable.vue";
import Column from 'primevue/column';
import ElRouteCourses from "@/Components/ElRoutes/ElRouteCourses.vue";
import ActionMenu from "@/Components/ActionMenu/ActionMenu.vue";
import ActionMenuEdit from "@/Components/ActionMenu/ActionMenuEdit.vue";
import {Ability} from "@/ability.js";
import PrimaryButton from "@/Components/Buttons/PrimaryButton.vue";
import ActionMenuDeleteAction from "@/Components/ActionMenu/ActionMenuDeleteAction.vue";
import ExportExcelButton from "@/Components/Buttons/ExportExcelButton.vue";
import SvgTrueFalse from "@/Components/Svg/SvgTrueFalse.vue";

import route from "ziggy-js";
import { getAlignFrozen } from "@/Helpers/Functions.js";

const props = defineProps({
    data: Object,
    form_data: Object,
})
</script>

<template>
    <ElPanel :is-transparent="false">
        <template #actions>
            <primary-button :ability="Ability.M_COURSES_CREATE" :href="route('courses.create')" :text="$t('base.add_new')" />
            <ExportExcelButton :ability="Ability.M_COURSES_INDEX_EXPORT"/>

        </template>
        <ElDataTable :src="props.data">
            <Column :header="$t('base.title')" :alignFrozen="getAlignFrozen()" frozen>
                <template #body="row">
                    <ElRouteCourses :model="row.data" />
                </template>
            </Column>
            
            <Column field="roles" :header="$t('base.is_active')">
                <template #body="row">
                    <SvgTrueFalse :value="row.data.is_active"/>
                </template>
            </Column>
            <Column field="created_at_text" :header="$t('base.created_at')"/>
            <Column :header="$t('base.actions')">
                <template #body="row">
                    <ActionMenu>
                        <ActionMenuEdit :ability="Ability.M_courses_UPDATE" :href="route('courses.profile.edit', row.data.id)" />
                        <ActionMenuDeleteAction :ability="Ability.M_courses_DELETE" :dialog-message="row.data.name"
                            :href="route('courses.delete', row.data.id)" />
                    </ActionMenu>
                </template>
            </Column>
        </ElDataTable>
    </ElPanel>
</template>

<style scoped></style>
