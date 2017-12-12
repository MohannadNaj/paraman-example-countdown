<template>
    <div>
      <div class="editor-date__container">
        <div class="editor-date__value-container" v-if="previewMode">
          <span style="background: #eee;">{{ paramValue }}</span>
        </div>
        <div class="editor-date__input-container" v-if="!previewMode">
          <input type="text" class="editor-date__input form-control editor" v-model="paramValue">
        </div>
      </div>            
    </div>
</template>

<script>
    export default {
        mixins: [Paraman.editorsMixin],
        data() {
            return {
                
            }
        },
        mounted() {
            window.vm = this
        },
        watch: {
            previewMode(previewMode) {
                if(previewMode)
                {
                    $(this.$el).find('.editor-date__input-container')
                        .removeClass('open')
                    this.$editor().data("DateTimePicker").disable()
                    return ;
                }

                this.$nextTick( this.enableEditing )
            }
        },
        methods: {
            enableEditing() {
                $(this.$el).find('.editor-date__input-container').addClass('open')

                this.$editor().datetimepicker({format: 'DD-MM-Y'})
                
                this.$nextTick(x => {
                    this.$editor().data("DateTimePicker").show()
                    this.$editor().on('dp.change', this.dateChange)
                })
            },
            dateChange(e) {
                this.paramValue = e.target.value
            },
            $editor() {
                return $(this.$el).find('.editor')
            }
        }
    }
</script>