<template>
  <div class="main-bg">
    <!-- Contact Start -->
    <div class="container-xxl py-5 ">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="mb-2">Apply for an Online Free Trial at</h1>
        <h1 class="mb-5 mt-0">Hijrah Academy</h1>
        <h6 class="section-title bg-white text-center text-primary px-3">Free Trial</h6>
      </div>
      <div class="container">
        <div class="row g-4 justify-center">
          <div class="col-md-8 card-shadow wow fadeInUp" data-wow-delay="0.5s">
            <form @submit.prevent="submitForm">
              <div class="row g-3 p-2">
                <!-- Parent's Name -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.parent_name"
                      type="text"
                      class="form-control"
                      :class="{'is-invalid': errors.parent_name}"
                      id="parents-name"
                      placeholder="Parent's Name"
                      required
                    />
                    <label for="parents-name">Parent's Name *</label>
                    <div v-if="errors.parent_name" class="invalid-feedback">{{ errors.parent_name[0] }}</div>
                  </div>
                </div>

                <!-- Student's Name -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.student_name"
                      type="text"
                      class="form-control"
                      :class="{'is-invalid': errors.student_name}"
                      id="students-name"
                      placeholder="Student's Name"
                      required
                    />
                    <label for="students-name">Student's Name *</label>
                    <div v-if="errors.student_name" class="invalid-feedback">{{ errors.student_name[0] }}</div>
                  </div>
                </div>

                <!-- Student's Age -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.student_age"
                      type="number"
                      class="form-control"
                      :class="{'is-invalid': errors.student_age}"
                      id="students-age"
                      placeholder="Student's Age"
                      required
                    />
                    <label for="students-age">Student's Age *</label>
                    <div v-if="errors.student_age" class="invalid-feedback">{{ errors.student_age[0] }}</div>
                  </div>
                </div>

                <!-- Course Needed -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <select
                      v-model="form.course_needed"
                      class="form-select"
                      :class="{'is-invalid': errors.course_needed}"
                      id="course-needed"
                      required
                    >
                      <option value="Arabic">Arabic</option>
                      <option value="Quran">Quran</option>
                      <option value="Islamic Studies">Islamic Studies</option>
                    </select>
                    <label for="course-needed">Course Needed *</label>
                    <div v-if="errors.course_needed" class="invalid-feedback">{{ errors.course_needed[0] }}</div>
                  </div>
                </div>

                <!-- Phone Number -->
                <div class="col-md-4">
                  <div class="form-floating">
                    <input
                      v-model="form.phone_number"
                      type="tel"
                      class="form-control"
                      :class="{'is-invalid': errors.phone_number}"
                      id="phone-number"
                      placeholder="Phone Number"
                      required
                    />
                    <label for="phone-number">Phone Number *</label>
                    <div v-if="errors.phone_number" class="invalid-feedback">{{ errors.phone_number[0] }}</div>
                  </div>
                </div>

                <!-- Email Address -->
                <div class="col-md-4">
                  <div class="form-floating">
                    <input
                      v-model="form.email"
                      type="email"
                      class="form-control"
                      :class="{'is-invalid': errors.email}"
                      id="email"
                      placeholder="Email"
                      required
                    />
                    <label for="email">Email Address *</label>
                    <div v-if="errors.email" class="invalid-feedback">{{ errors.email[0] }}</div>
                  </div>
                </div>

                <!-- Country -->
                <div class="col-md-4">
                  <div class="form-floating">
                    <input
                      v-model="form.country"
                      type="text"
                      class="form-control"
                      :class="{'is-invalid': errors.country}"
                      id="country"
                      placeholder="Your Country"
                      required
                    />
                    <label for="country">Your Country *</label>
                    <div v-if="errors.country" class="invalid-feedback">{{ errors.country[0] }}</div>
                  </div>
                </div>

                <!-- Days -->
                <div class="col-md-12">
                  <label>Days: *</label><br />
                  <div class="form-check form-check-inline" v-for="day in days" :key="day">
                    <input
                      v-model="form.days"
                      class="form-check-input"
                      type="checkbox"
                      :value="day"
                      :id="day.toLowerCase()"
                    />
                    <label class="form-check-label" :for="day.toLowerCase()">{{ day }}</label>
                  </div>
                </div>

                <!-- Times / From -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.time_from"
                      type="time"
                      class="form-control"
                      :class="{'is-invalid': errors.time_from}"
                      id="time-from"
                      required
                    />
                    <label for="time-from">Times / From *</label>
                    <div v-if="errors.time_from" class="invalid-feedback">{{ errors.time_from[0] }}</div>
                  </div>
                </div>

                <!-- Times / To -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.time_to"
                      type="time"
                      class="form-control"
                      :class="{'is-invalid': errors.time_to}"
                      id="time-to"
                      required
                    />
                    <label for="time-to">Times / To *</label>
                    <div v-if="errors.time_to" class="invalid-feedback">{{ errors.time_to[0] }}</div>
                  </div>
                </div>

                <!-- Time Zone -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      v-model="form.time_zone"
                      type="text"
                      class="form-control"
                      :class="{'is-invalid': errors.time_zone}"
                      id="time-zone"
                      placeholder="Time Zone"
                      required
                    />
                    <label for="time-zone">Time Zone *</label>
                    <div v-if="errors.time_zone" class="invalid-feedback">{{ errors.time_zone[0] }}</div>
                  </div>
                </div>

                <!-- Class Duration -->
                <div class="col-md-6">
                  <div class="form-floating">
                    <select
                      v-model="form.class_duration"
                      class="form-select"
                      :class="{'is-invalid': errors.class_duration}"
                      id="class-duration"
                      required
                    >
                      <option value="30 mins">30 mins</option>
                      <option value="45 mins">45 mins</option>
                      <option value="60 mins">60 mins</option>
                    </select>
                    <label for="class-duration">Class Duration *</label>
                    <div v-if="errors.class_duration" class="invalid-feedback">{{ errors.class_duration[0] }}</div>
                  </div>
                </div>

                <!-- Preferred Teacher -->
                <div class="col-md-12">
                  <label>Preferred Teacher: *</label><br />
                  <div class="form-check form-check-inline">
                    <input
                      v-model="form.preferred_teacher"
                      class="form-check-input"
                      type="radio"
                      name="teacher"
                      id="male"
                      value="Male"
                      required
                    />
                    <label class="form-check-label" for="male">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input
                      v-model="form.preferred_teacher"
                      class="form-check-input"
                      type="radio"
                      name="teacher"
                      id="female"
                      value="Female"
                      required
                    />
                    <label class="form-check-label" for="female">Female</label>
                  </div>
                  <div v-if="errors.preferred_teacher" class="invalid-feedback">{{ errors.preferred_teacher[0] }}</div>
                </div>

                <!-- Goals and Expectations -->
                <div class="col-md-12">
                  <div class="form-floating">
                    <textarea
                      v-model="form.goals"
                      class="form-control"
                      id="goals"
                      placeholder="Goals and expectations"
                      style="height: 150px"
                    ></textarea>
                    <label for="goals">Goals and Expectations</label>
                    <div v-if="errors.goals" class="invalid-feedback">{{ errors.goals[0] }}</div>
                  </div>
                </div>

                   <!-- Add Another Student -->
                   


                <!-- Submit Button -->
                <div class="col-12">
                  <button class="btn btn-primary w-100 py-3" type="submit">Request Free Trial</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        parent_name: '',
        student_name: '',
        student_age: null,
        course_needed: '',
        phone_number: '',
        email: '',
        country: '',
        days: [],
        time_from: '',
        time_to: '',
        time_zone: '',
        class_duration: '',
        preferred_teacher: '',
        goals: ''
      },
      errors: {},
      days: ['Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday'],
    };
  },
  methods: {
    async submitForm() {
  try {
    this.errors = {};
    
    // Assuming you have an API endpoint for the form submission
    await this.$inertia.post('/enroll/store', this.form);
    
    // Reset the form after successful submission
    this.form = {
      parentsName: '',
      studentsName: '',
      studentsAge: null,
      courseNeeded: '',
      phoneNumber: '',
      email: '',
      country: '',
      days: [], // Reset to an empty array
      timeFrom: '',
      timeTo: '',
      timeZone: '',
      classDuration: '',
      preferredTeacher: '',
      goals: '',
      addStudent: '' // Reset to an empty string if this field exists
    };
  } catch (error) {
    if (error.response && error.response.data.errors) {
      this.errors = error.response.data.errors;
    }
  }
},


  },
};
</script>


<style>
/* Set background color #c4990c*/ 
.main-bg {
  background-color: #d4b03a1b;
}

/* Add shadow to the card */
.card-shadow {
  background-color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
