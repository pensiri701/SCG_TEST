 <template>
 <div class="col-lg-9">
  <!--//experience-section-->
  <Experience />
  <Freelancer />
 </div>
</template>


<script>
import Experience from "@/components/Experience.vue";
import Freelancer from "@/components/Freelancer.vue";
export default {
 components: {
  Experience,
  Freelancer
 }
};
</script>

