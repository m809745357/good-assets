<template>
    <div class="col-md-4 col-md-offset-4 profile">
  <div class="panel panel-default profile-panel">
    <div class="panel-heading" style="padding: 15px;">修改发票</div>

    <div class="panel-body">
        <form class="form-horizontal">
            <div class="form-group">
              <label for="invoice" class="col-md-3 control-label profile-label">发票抬头</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="invoice" v-model="billing.invoice" placeholder="请输入发票抬头">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="number" class="col-md-3 control-label profile-label">税号</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="number" v-model="billing.number" placeholder="请输入税号">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="address" class="col-md-3 control-label profile-label">地址</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="address" v-model="billing.address" placeholder="请输入地址">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="mobile" class="col-md-3 control-label profile-label">电话</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="mobile" v-model="billing.mobile" placeholder="请输入电话">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="bank" class="col-md-3 control-label profile-label">开户银行</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="bank" v-model="billing.bank" placeholder="请输入开户银行">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <label for="account" class="col-md-3 control-label profile-label">银行账号</label>
              <div class="col-md-8">
                <input type="text" class="form-control none" id="account" v-model="billing.account" placeholder="请输入银行账号">
              </div>
            </div>
            <hr class="profile-hr">
            <div class="form-group">
              <div class="col-md-offset-3 col-md-6">
                <button type="button" @click="update" style="margin: .5rem 0px 1rem;" class="btn btn-default btn-desc btn-block">保存</button>
              </div>
            </div>
        </form>
    </div>
  </div>
  </div>
</template>

<script>
    export default {
        props: ['attributes'],
        data() {
            return {
                billing: {
                    invoice: this.attributes.invoice,
                    number: this.attributes.number,
                    address: this.attributes.address,
                    mobile: this.attributes.mobile,
                    bank: this.attributes.bank,
                    account: this.attributes.account
                }
            }
        },

        created() {
            console.log(this.billing);
        },

        methods: {
            update() {
                axios.patch(this.url(), this.billing)
                    .then(response => {
                        this.success();
                    })
                    .catch(error => {
                        console.log(error.response.data);
                        this.error();
                    });
            },
            url() {
                return `/billings/${this.attributes.id}`;
            },
            success() {
                let message = {
                    status: 'success',
                    message: '发票信息更新成功！'
                };
                flash(message);
            },
            fail() {
                let message = {
                    status: 'warning',
                    message: '发票信息更新失败！'
                };
                flash(message);
            }
        }

    }
</script>
