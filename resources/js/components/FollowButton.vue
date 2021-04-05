<template>
    <div>
        <button
            @click="followUser"
            v-text="buttonText"
            class="select-none rounded-lg leading-normal no-underline text-white bg-blue-500 hover:bg-blue-700 py-1 px-1 ml-5">
        </button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],
        mounted(){
            console.log('component mounted.')
        },

        data: function () {
            return {
                status: this.follows,
            }
        },
        methods:{
            followUser(){
                axios.post('/follow/' + this.userId)
                .then(response => {
                    this.status = !this.status
                })
                .catch(errors => {
                    if (errors.response.status == 401) {
                        window.location = '/login';
                    }
                });
            }
        },

        computed: {
            buttonText() {
                return (this.status) ? 'Unfollow' : 'Follow'
            }
        }
    }
</script>
