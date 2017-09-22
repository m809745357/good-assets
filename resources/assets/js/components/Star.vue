<template>
    <img :src="imgInit" class="star" @click="changeFavorited">
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {
                isFavorited: this.data.isFavorited
            }
        },
        computed: {
            imgInit: function () {
                return this.isFavorited ? '/images/star.png' : '/images/unstar.png';
            }
        },
        methods: {
            changeFavorited: function (){
                if (window.Laravel.app == 'false') {
                    window.location.href = '/login';
                    return false;
                }
                this.isFavorited ? this.distory() : this.create();
            },
            create: function (){
                axios.post(this.path());

                this.isFavorited = true;
            },
            distory: function (){
                axios.delete(this.path());

                this.isFavorited = false;
            },
            path: function () {
                return `/projects/${this.data.id}/favorites`;
            }
        }
    }
</script>
