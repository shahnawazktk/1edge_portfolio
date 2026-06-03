# Mobile & Responsive Testing Guide

## Quick Testing Steps

### 1. Desktop Testing (Chrome/Firefox)

```bash
# Start the server
php artisan serve
```

Open browser and press:
- **Chrome**: `Ctrl + Shift + M` (Toggle Device Toolbar)
- **Firefox**: `Ctrl + Shift + M` (Responsive Design Mode)

### 2. Test These Breakpoints

#### Mobile Portrait (375px)
```
- Check navbar hamburger menu works
- Verify text is readable
- Ensure buttons are full-width
- Check images scale properly
```

#### Mobile Landscape (667px)
```
- Verify horizontal layout
- Check navigation is accessible
- Ensure no horizontal scroll
```

#### Tablet (768px)
```
- Verify 2-column layouts
- Check cards arrange properly
- Test navigation bar
```

#### Desktop (1200px+)
```
- Verify 3-4 column layouts
- Check all hover effects
- Ensure proper spacing
```

### 3. Real Device Testing

#### On Your Mobile Phone:

**Option 1: Same WiFi Network**
```bash
# Find your IP address
ipconfig
# Look for "IPv4 Address" under your WiFi adapter
# Example: 192.168.1.100

# Start server on all interfaces
php artisan serve --host=0.0.0.0 --port=8000

# On your phone, open browser and visit:
http://192.168.1.100:8000
```

**Option 2: USB Debugging (Android)**
```bash
# Enable USB debugging on Android
# Connect phone via USB
# In Chrome DevTools > Remote Devices
# Select your device and inspect
```

### 4. Test Checklist

#### ✅ Navigation
- [ ] Logo is visible and properly sized
- [ ] Hamburger menu appears on mobile (< 992px)
- [ ] Menu items are touch-friendly (min 44x44px)
- [ ] Menu closes after clicking a link
- [ ] Smooth scrolling works on anchor links

#### ✅ Home Page
- [ ] Hero section image scales properly
- [ ] Heading text is readable on all screens
- [ ] Buttons stack vertically on mobile
- [ ] Feature cards arrange in 1 column on mobile
- [ ] Stats show 2 columns on mobile
- [ ] No horizontal scrolling

#### ✅ About Page
- [ ] Banner text is readable
- [ ] Images scale without distortion
- [ ] Team cards stack properly
- [ ] Mission/Vision cards responsive
- [ ] Stats section looks good

#### ✅ Product Page
- [ ] Hero section responsive
- [ ] Module cards stack on mobile
- [ ] Pricing cards readable
- [ ] All icons scale properly
- [ ] CTA buttons work on mobile

#### ✅ Services Page
- [ ] Service cards responsive
- [ ] Icons scale properly
- [ ] Text is readable
- [ ] Layout stacks on mobile

#### ✅ Contact Page
- [ ] Form inputs are touch-friendly
- [ ] All fields are accessible
- [ ] Submit button is visible
- [ ] Contact info cards stack properly
- [ ] No zoom on input focus (iOS)

#### ✅ Footer
- [ ] Logo scales properly
- [ ] Links are readable
- [ ] Social icons properly sized
- [ ] Contact info visible
- [ ] Layout stacks on mobile
- [ ] All columns center-aligned on mobile

### 5. Common Issues to Check

#### No Horizontal Scroll
```javascript
// Open DevTools Console and run:
document.body.scrollWidth === document.body.clientWidth
// Should return: true
```

#### Images Not Scaling
- Check: All images have `max-width: 100%` or `class="img-fluid"`
- Verify: No fixed width in pixels

#### Text Too Small
- Minimum: 14px for body text
- Minimum: 16px for input fields (iOS)
- Headings: Should scale responsively

#### Buttons Too Small
- Minimum: 44x44px for touch targets
- Check with:
```javascript
document.querySelectorAll('button, .btn, a').forEach(el => {
  const rect = el.getBoundingClientRect();
  if (rect.width < 44 || rect.height < 44) {
    console.warn('Small tap target:', el);
  }
});
```

### 6. Performance Testing

#### Check Page Speed
```
1. Open Chrome DevTools
2. Go to Lighthouse tab
3. Select "Mobile" device
4. Run audit
5. Target scores:
   - Performance: > 90
   - Accessibility: > 90
   - Best Practices: > 90
```

#### Check Network Speed
```
1. DevTools > Network tab
2. Throttle to "Slow 3G"
3. Reload page
4. Page should load in < 5 seconds
```

### 7. Browser Compatibility

Test on these browsers:

#### Desktop
- [ ] Chrome (latest)
- [ ] Firefox (latest)
- [ ] Edge (latest)
- [ ] Safari (if on Mac)

#### Mobile
- [ ] Chrome Mobile
- [ ] Safari iOS
- [ ] Samsung Internet
- [ ] Firefox Mobile

### 8. Orientation Testing

On mobile devices:
```
1. Test in portrait mode
2. Rotate to landscape
3. Verify:
   - Layout adjusts properly
   - No content is cut off
   - Navigation still works
   - Images reflow correctly
```

### 9. Touch Interaction Testing

Test these on real devices:
- [ ] Tap on navigation links
- [ ] Swipe on carousel (if any)
- [ ] Pinch to zoom (should work)
- [ ] Long press on links
- [ ] Tap on form inputs
- [ ] Tap on buttons

### 10. Accessibility Testing

#### Keyboard Navigation
```
Press Tab key repeatedly
- All interactive elements should be focusable
- Focus indicator should be visible (orange outline)
- Tab order should be logical
```

#### Screen Reader
```
Use NVDA (Windows) or VoiceOver (Mac/iOS)
- All images have alt text
- Form labels are associated
- Headings are in logical order
- Links have descriptive text
```

## Quick Fix Commands

### Clear Cache
```bash
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

### Rebuild Assets
```bash
npm run build
# or
npm run dev
```

### Check for Errors
```bash
# Check Laravel logs
tail -f storage/logs/laravel.log

# Check browser console (F12)
# Look for any red errors
```

## Mobile Testing Tools

### Online Tools
1. **Google Mobile-Friendly Test**
   - https://search.google.com/test/mobile-friendly

2. **Responsive Design Checker**
   - https://responsivedesignchecker.com/

3. **BrowserStack** (Paid)
   - Test on real devices

### Browser Extensions
1. **Window Resizer** (Chrome)
2. **Responsive Viewer** (Chrome)
3. **User Agent Switcher** (Firefox)

## Debugging Tips

### View Active Breakpoint
Add this to bottom of page temporarily:
```html
<div style="position: fixed; bottom: 0; right: 0; background: red; color: white; padding: 10px; z-index: 9999;">
  <span class="d-sm-none">XS</span>
  <span class="d-none d-sm-block d-md-none">SM</span>
  <span class="d-none d-md-block d-lg-none">MD</span>
  <span class="d-none d-lg-block d-xl-none">LG</span>
  <span class="d-none d-xl-block">XL</span>
</div>
```

### Check Viewport
```javascript
// Console command
console.log('Viewport:', window.innerWidth, 'x', window.innerHeight);
```

### Find Horizontal Scroll Source
```javascript
// Find element causing horizontal scroll
document.querySelectorAll('*').forEach(el => {
  if (el.scrollWidth > el.clientWidth) {
    console.log('Overflowing element:', el);
  }
});
```

## Expected Results

✅ **All pages should**:
- Load within 3 seconds on 3G
- Have no horizontal scrolling
- Display properly on 320px - 2560px widths
- Work on portrait and landscape
- Have readable text without zooming
- Have touch-friendly interactive elements

## Support & Help

If something doesn't work:

1. **Check browser console** (F12) for errors
2. **Verify CSS files** are loading
3. **Clear cache** and hard refresh (Ctrl+Shift+R)
4. **Test in incognito mode** (no extensions)
5. **Check viewport meta tag** is present
6. **Verify Bootstrap CSS** is loaded

## Contact

For responsive design issues:
- Email: dev@1edge.com
- Check: RESPONSIVE-IMPROVEMENTS.md

---
Last Updated: June 3, 2026
