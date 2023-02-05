<template>
    <div class="px-32">
        <full-calendar :options="calendarOptions"></full-calendar>
    </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import interactionPlugin from "@fullcalendar/interaction"
import axios from "axios";
export default {
    name: "Calendar",
    components: {
        FullCalendar
    },
    data() {
        return {
            calendarOptions: {
                plugins: [dayGridPlugin, interactionPlugin],
                initialView:'dayGridMonth',
                events:[]
            },
            events: [],
            newEvent: {
                event_name: "",
                start_date: "",
                end_date: "",
            },
            addingMode: true,
            indexToUpdate: "",
        };

    },
    created() {
        this.getEvents();
    },
    methods: {

        getEvents(){
            axios
                .get("/api/calendar")
                .then(resp => (this.calendarOptions.events = resp.data.data))
                .catch(err =>console.log(err.response.data));
        },
    },

}
</script>

<style scoped>

</style>
