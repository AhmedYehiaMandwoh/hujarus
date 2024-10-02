<script setup>
import ElPanel from "@/Components/ElPanel.vue";
import ElDataTable from "@/Components/Table/ElDataTable.vue";
import Column from 'primevue/column';
import ElRouteEnroll from "@/Components/ElRoutes/ElRouteEnroll.vue";
import { Ability } from "@/ability.js";
import ExportExcelButton from "@/Components/Buttons/ExportExcelButton.vue";
import { getAlignFrozen } from "@/Helpers/Functions.js";

const props = defineProps({
    data: Object,
    form_data: Object,
});
</script>

<template>
    <ElPanel :is-transparent="false">
        <template #actions>
            <ExportExcelButton :ability="Ability.M_ENROLCLIENTS_INDEX_EXPORT"/>
        </template>
        <ElDataTable :src="props.data" :key="props.data.id">
       
           
            <Column field="parent_name" :header="$t('base.parent_name')"/>
            <Column field="student_name" :header="$t('base.student_name')"/>
            <Column field="student_age" :header="$t('base.student_age')"/>
            <Column field="course_needed" :header="$t('base.course_needed')"/>
            <Column field="phone_number" :header="$t('base.phone_number')"/>
            <Column field="email" :header="$t('base.email')"/>
            <Column field="country" :header="$t('base.country')"/>
            <Column field="days" :header="$t('base.days')"/>
            <Column field="time_from" :header="$t('base.time_from')"/>
            <Column field="time_to" :header="$t('base.time_to')"/>
            <Column field="time_zone" :header="$t('base.time_zone')"/>
            <Column field="class_duration" :header="$t('base.class_duration')"/>
            <Column field="preferred_teacher" :header="$t('base.preferred_teacher')"/>
            <Column field="goals" :header="$t('base.goals')"/>
            <Column field="created_at" :header="$t('base.created_at')"/>
        </ElDataTable>
    </ElPanel>
</template>

<style scoped></style>
