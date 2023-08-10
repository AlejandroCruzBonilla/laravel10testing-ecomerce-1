//FontAwesome
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import {
  faFacebookF,
  faInstagram,
  faLinkedin,
  faTiktok,
  faTwitter,
} from '@fortawesome/free-brands-svg-icons';

import {
  faGripLines,
  faXmark,
  faPhone,
  faEnvelope,
} from '@fortawesome/free-solid-svg-icons';

library.add(
  faFacebookF,
  faInstagram,
  faTiktok,
  faLinkedin,
  faTwitter,
  faGripLines,
  faXmark,
  faPhone,
  faEnvelope
);

export default FontAwesomeIcon;