<template>
    <select :id="props.name" v-model="props.selectedId" class="form-input">
        <option :value="0">{{ "Please select an option".t1() }}</option>
        <option
            v-for="(item, i) in model"
            :key="i"
            :value="item.id"
            :selected="props.selectedId === item.id"
            @change="$emit('selectedId', $event.target.selected)"
        >{{ item[objName] }}</option>
    </select>
</template>

<script setup>
import { onMounted, ref, defineProps } from "vue";

const props = defineProps(["obj", "name", "value", "objName", "selectedId"]);

const model = ref([]);

onMounted(async () => {
    model.value = await props.obj.fetchObjects();
    console.log(props.selectedId)
});
</script>

<template>
    <select :id="props.name" v-model="props.selectedId" class="form-input">
        <option :value="0">{{ "Please select an option".t1() }}</option>
        <option
            v-for="(item, i) in model"
            :key="i"
            :value="item.id"
            :selected="props.selectedId === item.id"
            @change="$emit('selectedId', this.value)"
        >{{ item[objName] }}</option>
    </select>
</template>
