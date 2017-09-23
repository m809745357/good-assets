<template>
    <div class="col-md-4 col-md-offset-4 profile">
    <div class="panel panel-default profile-panel">
    <div class="panel-heading" style="padding: 15px;">个人信息</div>

    <div class="panel-body">
    <form class="form-horizontal">
        <div class="form-group">
          <label for="username" class="col-md-3 control-label profile-label">用户名</label>
          <div class="col-md-8">
            <input type="text" class="form-control none" id="username" v-model="profile.name" placeholder="请输入用户名">
          </div>
        </div>
        <hr class="profile-hr">
        <div class="form-group">
          <label for="phone" class="col-md-3 control-label profile-label">手机号</label>
          <div class="col-md-8">
            <input type="tel" class="form-control none" id="phone" v-model="profile.mobile" placeholder="请输入手机号">
          </div>
        </div>
        <hr class="profile-hr">
        <div class="form-group">
          <label for="gender" class="col-md-3 control-label profile-label">性&nbsp;&nbsp;&nbsp;&nbsp;别</label>
          <div class="col-md-8 gender">
            <label class="radio-inline">
            <input type="radio" id="gender1" name="gender" value="1" v-model="profile.gender"> <span>男</span>
            </label>
            <label class="radio-inline">
            <input type="radio" id="gender2" name="gender" value="2" v-model="profile.gender"> <span>女</span>
            </label>
            <label class="radio-inline">
            <input type="radio" id="gender3" name="gender" value="3" v-model="profile.gender"> <span>保密</span>
            </label>
          </div>
        </div>
        <hr class="profile-hr">
        <div class="form-group">
          <div class="col-md-offset-3 col-md-6">
            <button type="button" style="margin: .5rem 0px 1rem;" class="btn btn-default btn-desc btn-block" @click="update">保存</button>
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
                profile: {
                    name: this.user.name,
                    mobile: this.user.mobile,
                    gender: this.user.gender,
                }
            }
        },
        methods: {
            update() {
                axios.patch(this.url(), this.profile)
                    .then(response => {
                        this.success();
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.fail();
                    });
            },
            url() {
                return `/users/${this.user.id}`;
            },
            success() {
                let message = {
                    status: 'success',
                    message: '个人信息更新成功！'
                };
                flash(message);
            },
            fail() {
                let message = {
                    status: 'warning',
                    message: '个人信息更新失败！'
                };
                flash(message);
            }
        }
    }
</script>
