<template lang="html">
    <div :class="'alert alert-' + status + ' alert-flash'" role="alert" v-show="show">
      <strong>{{ status }}!</strong> {{ body }}
    </div>
</template>

<script>
    export default {
        props: ['data'],

        data() {
            return {
                body: this.data.message,
                status: this.data.status,
                show: false
            }
        },

        created() {
            if (this.data) {
                this.flash(this.data);
            }

            window.events.$on('flash', data => {
                this.flash(data);
            });
        },

        methods: {
            flash(data) {
                console.log(data);
                this.body = data.message;
                this.status = data.status;
                this.show = true;

                this.hide();
            },

            hide() {
                setTimeout(() => {
                    this.show = false;
                }, 3000);
            }
        }

    }
</script>

<style lang="css">
    .alert-flash {
        position: fixed;
        right: 25px;
        top: 135px;
    }
</style>
