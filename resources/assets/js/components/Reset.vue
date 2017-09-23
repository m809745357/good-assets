<template>
    <div class="col-md-4 col-md-offset-4 profile">
  <div class="panel panel-default profile-panel">
    <div class="panel-heading" style="padding: 15px;">修改密码</div>

    <div class="panel-body">
        <form class="form-horizontal">
            <div class="form-group">
              <label for="password-old" class="col-md-3 control-label profile-label">旧的密码</label>
              <div class="col-md-8">
                <input type="password" class="form-control none" id="password-old" v-model="reset.password_old" placeholder="请输旧的密码">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="password-new" class="col-md-3 control-label profile-label">新的密码</label>
              <div class="col-md-8">
                <input type="password" class="form-control none" id="password-new" v-model="reset.password" placeholder="请输新的密码">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="password-confirm" class="col-md-3 control-label profile-label">重复密码</label>
              <div class="col-md-8">
                <input type="password" class="form-control none" id="password-confirm" v-model="reset.password_confirmation" placeholder="请输重复密码">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <div class="col-md-offset-3 col-md-6">
                <button type="button" @click="update" style="margin: .5rem 0px 1rem;" class="btn btn-default btn-desc btn-block">修改密码</button>
              </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                reset: {
                    password_old: '',
                    password: '',
                    password_confirmation: ''
                }
            }
        },
        methods: {
            update() {
                axios.patch(this.url(), this.reset)
                    .then(response => {
                        this.success();
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.fail(error.response.data);
                    });
            },
            url() {
                return `/users/${this.user.id}`;
            },
            success() {
                let message = {
                    status: 'success',
                    message: '密码修改完成，请重新登录！'
                };
                flash(message);

                // window.location.href = '/logout';
            },
            fail(data) {
                let message = {
                    status: 'warning',
                    message: data.message
                };
                flash(message);
            }
        }
    }
</script>
