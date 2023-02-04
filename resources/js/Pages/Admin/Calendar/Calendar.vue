<template>
    <AppLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Calendar
            </h2>
        </template>
        <div>
            <Link
                :href="route('events.index')"
            >
                <button class="w-full mt-10 hover:shadow-form rounded-md bg-blue-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                >
                    Events List
                </button>

            </Link>
            <div class="flex items-center justify-center p-12">

                <!-- Author: FormBold Team -->
                <!-- Learn More: https://formbold.com -->
                <div class="mx-auto w-full max-w-[550px]">
                    <form @submit.prevent>
                        <div class="mb-5">
                            <label
                                for="event_name"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Type the event name
                            </label>
                            <input
                                v-model="newEvent.event_name"
                                type="text"
                                name="event"
                                id="event_name"
                                placeholder="Event name"
                                min="0"
                                class="w-full appearance-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>

                        <div class="-mx-3 flex flex-wrap">
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label
                                        for="date"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        Start date
                                    </label>
                                    <input
                                        v-model="newEvent.start_date"
                                        type="date"
                                        name="date"
                                        id="date"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                            </div>
                            <div class="w-full px-3 sm:w-1/2">
                                <div class="mb-5">
                                    <label
                                        for="date"
                                        class="mb-3 block text-base font-medium text-[#07074D]"
                                    >
                                        End date
                                    </label>
                                    <input
                                        v-model="newEvent.end_date"
                                        type="date"
                                        name="date"
                                        id="date"
                                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                                    />
                                </div>
                            </div>
                        </div>
                        <div v-if="addingMode">
                            <button
                                @click="addNewEvent"
                                class="hover:shadow-form rounded-md bg-blue-400 py-3 px-8 text-center text-base font-semibold text-white outline-none"
                            >
                                Save event
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="px-32">
                <full-calendar :options="calendarOptions"></full-calendar>
            </div>
        </div>
    </AppLayout>

</template>

<script>
import FullCalendar from "@fullcalendar/vue3";
import dayGridPlugin from "@fullcalendar/daygrid";
import interactionPlugin from "@fullcalendar/interaction"
import axios from "axios";
import AppLayout from "@/Layouts/AppLayout.vue";
import {Link} from "@inertiajs/vue3";

export default {
    name: "Calendar",
    components: {
        AppLayout,
        FullCalendar,
        Link
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
        addNewEvent() {
            axios.post("/api/calendar",
                this.newEvent)
                .then(data => {
                    this.getEvents();
                    this.resetForm();
                })
                .catch(err =>
                    console.log("Unable to add new event", err.response.data)
                );
        },
        showEvent(arg){
            console.log(this.events)
          this.addingMode = false;
          let event = this.events.find(
              event => event.id === arg.event.id
          );

          this.indexToUpdate = id;
          this.newEvent = {
              event_name: title,
              start_date: start,
              end_date: end
          }
        },
        updateEvent(){
            axios.put("api/calendar/" + this.indexToUpdate, {
               ...this.newEvent
            })
                .then(resp =>{
                    this.resetForm();
                    this.getEvents();
                    this.addingMode = !this.addingMode
                })
                .catch(err =>
                    console.log("Unable to update", err.response.data));
        },
        deleteEvent(){
            axios.delete("/api/calendar/" + this.indexToUpdate)
                .then(resp =>{
                    this.resetForm();
                    this.getEvents();
                    this.addingMode = !addingMode;
                })
                .catch(err =>
                console.log("Unable to delete", err.response.data))
        },
        getEvents(){
            axios
                .get("/api/calendar")
                .then(resp => (this.calendarOptions.events = resp.data.data))
                .catch(err =>console.log(err.response.data));
        },
        resetForm(){
            Object.keys(this.newEvent).forEach(key => {
                return (this.newEvent[key] = "");
            });
                return (this.newEvent[key] = "");
        }
    },
    watch: {
        indexToUpdate(){
            return this.indexToUpdate;
        }
    }
}
</script>

<style scoped>

</style>
