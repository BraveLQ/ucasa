import {usePage} from "@inertiajs/vue3";

export function usePermission(){
    const hasRole = (name)=> usePage().props.auth.user.roles.include(name);
    const hasPermission = (name)=> usePage().props.auth.user.include(name);

    return{hasRole, hasPermission}

}
