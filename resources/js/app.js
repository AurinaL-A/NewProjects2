import './bootstrap';
import IMask from 'imask';

IMask(
    document.getElementById('tel'),
    {
      mask: '+{7}(000)000-00-00'
    }
  )
