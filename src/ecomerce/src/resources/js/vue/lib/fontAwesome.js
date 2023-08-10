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
  faEnvelope,
  faGripLines,
  faPhone,
  faUser,
  faXmark,
} from '@fortawesome/free-solid-svg-icons';

library.add(
  faEnvelope,
  faFacebookF,
  faGripLines,
  faInstagram,
  faLinkedin,
  faPhone,
  faTiktok,
  faTwitter,
  faUser,
  faXmark,
);

export default FontAwesomeIcon;