<template>
    <v-app>
        <v-stepper v-model="stepperStep" vertical>
            <v-stepper-step
                :complete="stepperStep > 1"
                :editable="stepperStep > 1"
                step="1"
            >
                Name of step 1
                <small>test</small>
            </v-stepper-step>

            <v-stepper-content step="1">
                <div class="pa-2">
                    <v-form @submit.prevent="goToNextStep">
                        <v-text-field
                            outlined
                            label="Superficie"
                            suffix="m²"
                        ></v-text-field>

                        <v-btn type="submit" color="primary">
                            Suivant
                        </v-btn>
                    </v-form>
                </div>
            </v-stepper-content>

            <v-stepper-step
                :complete="stepperStep > 2"
                :editable="stepperStep > 2"
                step="2"
            >
                Name of step 1
            </v-stepper-step>

            <v-stepper-content step="2">
                <v-btn text @click="goToPreviousStep">
                    <v-icon left dark>
                        mdi-chevron-left
                    </v-icon>
                    Précédent
                </v-btn>

                <v-btn color="primary">
                    Suivant
                </v-btn>
            </v-stepper-content>
        </v-stepper>
    </v-app>
</template>

<script>
export default {
    data: () => ({
        stepperStep: 1
    }),
    methods: {
        goToNextStep() {
            this.stepperStep = this.stepperStep + 1;
        },
        goToPreviousStep() {
            this.stepperStep = this.stepperStep - 1;
        }
    }
};
</script>
